// pre conditions
// get parent tb 'exo_records_tosync'
// get child table magento ids from 'exo_records_tosync_ids'
// if magento ids exists from child table get orders by magento ids 
// if not empty exo_order_id from orders looping order loops will continue pass this orders info in exo myob to check if there's an exo_id for this order records

step 2
// send Exo Sales Order
// format order data based on myob exo data array format
// pre conditions
	under formar order request function
	1. check if order data is not empty
	2. get current websites
	3. format order request
	4. if format is ready validate to exo
		- call curl handler
		- apiPostRequest
			// pre-conditions
			// check if options parameters is exists
			// pre-conditions
			// check if data parameters is exists
			// post conditions
			// return request
			// if not return request log error
	5. if validate response status == 200 or successfull
		- use guzzle \GuzzleHttp\Ring\Core::body($validateOrderResponse);
		- post this order data array to myob exo using https://exo.api.myob.com/salesorder/ using sendSalesOrder function
		- after post get exo_id from myob exo


