<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use App\Order;
use App\Mail\OrderConfirmed;
use Braintree;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
  private function getValidation(){
    return [
      // @TODO regole di validazione
    ];
  }

  // Pagina Homepage
  public function homepage() {

      $categories = Category::all();
      $restaurants = Restaurant::all();
      
      $filterJson = DB::table('restaurants')
                    ->select(DB::raw("restaurants.id,restaurants.img,restaurants.name,GROUP_CONCAT(categories.id SEPARATOR ' ') as categories"))
                    ->join('category_restaurant' , 'category_restaurant.restaurant_id' , '=' , 'restaurants.id')
                    ->join('categories' ,'categories.id' ,'=' , 'category_restaurant.category_id')
                    ->groupBy('restaurants.id') 
                    ->get();
                  
      return view('pages.homepage', compact('categories' , 'restaurants','filterJson'));
    }

    // Pagina Info web
    public function infoWebPage() {
      
      
      return view('pages.Client.infoWebPage');
    }
  
    // Pagina Faq
    public function faq() {
  
      return view('pages.Client.faq');
    }
  
    // Pagina Menu ristorante
  public function clientRestaurant($id) {

    $restaurant = Restaurant::findOrFail($id);
    
    $antipasti= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'antipasto')->get();
    
    $primi= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'primo')->get();
    
    $secondi= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'secondo')->get();

    $dolci = Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'dolce')->get();
                              
    return view('pages.Client.homeRestaurant', compact(
      'restaurant',
      'antipasti',
      'primi',
      'secondi',
      'dolci',
    ));
  }
  
    //Pagina Checkout
    public function checkout() {
      
      $gateway = new Braintree\Gateway([
      'environment' => config('services.braintree.environment'),
      'merchantId' => config('services.braintree.merchantId'),
      'publicKey' => config('services.braintree.publicKey'),
      'privateKey' => config('services.braintree.privateKey')
      ]);
      
      $token = $gateway -> ClientToken() -> generate();
      return view('pages.Client.checkout', compact('token'));
    }
  
    public function payment(OrderRequest $request) {
      
      $gateway = new Braintree\Gateway([
      'environment' => config('services.braintree.environment'),
      'merchantId' => config('services.braintree.merchantId'),
      'publicKey' => config('services.braintree.publicKey'),
      'privateKey' => config('services.braintree.privateKey')
      ]);
  
      $data = $request->all();
  
      $amount = $request -> amount;
      
      $result = $gateway->transaction()->sale([
          'amount' => $amount,
          'paymentMethodNonce' => 'fake-valid-nonce',
          'options' => [
              'submitForSettlement' => true
          ]
      ]);
      
      if ($result -> success) {
          $transaction = $result->transaction;
  
          $order = new Order();
          $order->fill($data);
          $order->save();
          $order -> products() -> sync($data['product_id']);
          $order->save();
          
          Mail::to('test@gmail.com')->send(new OrderConfirmed($order));
          Mail::to($order -> email)->send(new OrderConfirmed($order));
  
          return redirect() -> route('transaction', encrypt($transaction -> id));
      } else {
          $errorString = "";
  
          foreach($result->errors->deepAll() as $error) {
              $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
          }
  
          return back()->withErrors('Si è verificato un errore: ' .$result -> message);
      }
    }
         
    public function transaction($id) {
      
      $transaction = Crypt::decrypt($id);
      return view('pages.Client.transaction',compact('transaction'));
    }
  }
    
    
    
  
   
    


  
      


    
  

  

  
  
    
        
        
                
      
      
      
        
    
  
  
      


      
                
   

      


    
    
    

