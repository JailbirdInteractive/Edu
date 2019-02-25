<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1. Import the PayPal SDK client that was created in `Set up the Server SDK`.
use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Input;

use Redirect;
use Session;
use URL;
use App\Earnings;

class PaypalController extends Controller
{
    private $_api_context;
    private $req;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //error_log('message.', $request->all());

$earning=new Earnings();
$earnings->student_name='Jim bob';
$earnings->earnings=$request->cost;
$earnings->transaction_id=$request->orderID;
$earnings->user_id=$request->instructor_id;
$earnings->student_id=2;
$earnings->course=$request->course;
$earnings->net_earnings=$request->net;
$earnings->save();

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public static function getOrder($orderId)
    {
        $earning=new Earnings();
        $earnings->student_name='Jim bob';
        $earnings->earnings=$orderId->cost;
        $earnings->transaction_id=$orderId->orderID;
        $earnings->user_id=$orderId->instructor_id;
        $earnings->student_id=2;
        $earnings->save();

  //dd($orderId);
      // 3. Call PayPal to get the transaction details
      //$client = PayPalClient::client();
      //$response = $client->execute(new OrdersGetRequest($orderId));
      /**
       *Enable the following line to print complete response as JSON.
       */
      //print json_encode($response->result);
    //   print "Status Code: {$response->statusCode}\n";
    //   print "Status: {$response->result->status}\n";
    //   print "Order ID: {$response->result->id}\n";
    //   print "Intent: {$response->result->intent}\n";
    //   print "Links:\n";
    //   foreach($response->result->links as $link)
    //   {
    //     print "\t{$link->rel}: {$link->href}\tCall Type: {$link->method}\n";
    //   }
    //   // 4. Save the transaction in your database. Implement logic to save transaction to your database for future reference.
    //   print "Gross Amount: {$response->result->purchase_units[0]->amount->currency_code} {$response->result->purchase_units[0]->amount->value}\n";
  
      // To print the whole response body, uncomment the following line
      // echo json_encode($response->result, JSON_PRETTY_PRINT);
    }
  
  
  /**
   *This is the driver function that invokes the getOrder function to retrieve
   *sample order details.
   *
   *To get the correct order ID, this sample uses createOrder to create a new order
   *and then uses the newly-created order ID with GetOrder.
   */
  public function __construct()
  {
/** PayPal api context **/
      $paypal_conf = \Config::get('paypal');
      $this->_api_context = new ApiContext(new OAuthTokenCredential(
          $paypal_conf['client_id'],
          $paypal_conf['secret'])
      );
      $this->_api_context->setConfig($paypal_conf['settings']);
}


public function paypalPayment(Request $request)
{
Session::put('req',$request->all());
    $payer = new Payer();
    $payer->setPaymentMethod('paypal');
    $item_1 = new Item();
    $item_1->setName($request->course) /** item name **/
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setPrice($request->get('amount')); /** unit price **/
    $item_list = new ItemList();
    $item_list->setItems(array($item_1));
    $amount = new Amount();
    $amount->setCurrency('USD')
        ->setTotal($request->get('amount'));
    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Course Access');
    $redirect_urls = new RedirectUrls();
    $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
        ->setCancelUrl(URL::to('status'));
    $payment = new Payment();
    $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
    /** dd($payment->create($this->_api_context));exit; **/
    try {
        $payment->create($this->_api_context);
    } catch (\PayPal\Exception\PPConnectionException $ex) {
        if (\Config::get('app.debug')) {
            \Session::put('error', 'Connection timeout');
            return Redirect::to('/');
        } else {
            \Session::put('error', 'Some error occur, sorry for inconvenient');
            return Redirect::to('/');
        }
    }
    foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
            $redirect_url = $link->getHref();
            break;
        }
    }
    /** add payment ID to session **/
    Session::put('paypal_payment_id', $payment->getId());
    if (isset($redirect_url)) {
        /** redirect to paypal **/
        return Redirect::away($redirect_url);
    }
    \Session::put('error', 'Unknown error occurred');
    return Redirect::to('/');
}
public function getPaymentStatus()
{
    /** Get the payment ID before session clear **/
    $payment_id = Session::get('paypal_payment_id');
    /** clear the session payment ID **/
    $r=Session::get('req');
Session::forget('req');
    Session::forget('paypal_payment_id');
    if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        \Session::put('error', 'Payment failed');
        return Redirect::to('/');
    }
    $payment = Payment::get($payment_id, $this->_api_context);
    $execution = new PaymentExecution();
    $execution->setPayerId(Input::get('PayerID'));
    /**Execute the payment **/
    $result = $payment->execute($execution, $this->_api_context);
    if ($result->getState() == 'approved') {
        \Session::put('success', 'Payment success');
        //dd($result->transactions->transaction->amount->total);
        $req=collect($r);
        $res=collect($result);
        //dd($res->all()->id);
        
        $earnings=new Earnings();
        $earnings->student_name='Jim bob';
        $earnings->earnings=$req->get('amount');
        $earnings->transaction_id=$result->getId();
        $earnings->user_id=$req->get('instructor_id');
        $earnings->course=$req->get('course');
        $earnings->student_id=2;
        $earnings->save();
        return Redirect::back();
    }
    \Session::put('error', 'Payment failed');
    return Redirect::to('/');
}

}
