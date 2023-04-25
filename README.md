To see the 3 endpoints result  you have tu to upload: the InvoiceController.php inside the Controllers folder (App\Http\Controllers)
You have to upload the models : Invoice_product_line.php and Invoice.php inside the Models folder (it cointains the relationships) (App\Models)
You have to upload the web routes : web.php inside the routes folder (it cointains the routes of each endpoint) (\routes)
The urls to access are: 
/invoices ->show all invoices
/invoices/show/{invoice} -> show the invoice selected including invoice, company and products added to the sale (using an uuid)
/invoices/rejected/{invoice}'-> change the status to "rejected" if the invoice hasn't been approved or rejected (using an uuid)
/invoices/approved/{invoice}'-> change the status to "approved" if the invoice hasn't been approved or rejected (using an uuid)
