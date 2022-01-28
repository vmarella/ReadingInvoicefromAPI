
<?php
    // Reading the list of Invoices from Invoice_list.txt file
    $strJsonFileContents = file_get_contents("C:\Users\marellv1\OneDrive - Aalto University\Task\Invoice_list (Input).json");
    
    print_r($strJsonFileContents)

    function printInvoice($url)   // Function to print the required information from the invoice
    {
          $xml = $url;

          $output = simplexml_load_file($xml) or die("Unable to URL!"); //Loading the XML file and Error Handling

        // printing the required data from the XML files

        if(!empty($output->BuyerOrganisationUnitNumber))  // Checking to make sure the field is not empty.
          echo "Buyer Organisation Unit Number: " .$output->BuyerOrganisationUnitNumber . "\n"; // print the field

        if(!empty($output->BuyerPartyDetails->BuyerOrganisationName))
          echo "Buyer Organisation Name: " .$output->BuyerPartyDetails->BuyerOrganisationName."\n";

        if(!empty($output->BuyerPartyDetails->BuyerPostalAddressDetails->BuyerTownName))
          echo "Buyer Town Name: " .$output->BuyerPartyDetails->BuyerPostalAddressDetails->BuyerTownName."\n";

        if(!empty($output->BuyerPartyDetails->BuyerPostalAddressDetails->BuyerPostCodeIdentifier))
          echo "Buyer Postal Code: " .$output->BuyerPartyDetails->BuyerPostalAddressDetails->BuyerPostCodeIdentifier."\n";

        if(!empty($output->InvoiceDetails->InvoiceTotalVatIncludedAmount))
          echo "Invoice Total Vat Included Ammount: " .$output->InvoiceDetails->InvoiceTotalVatIncludedAmount. "\n";

        if(!empty($output->InvoieDetails->PaymentTermsDetails->InvoiceDueDate))
          echo "Invoice Due Date: " .$output->InvoieDetails->PaymentTermsDetails->InvoiceDueDate. "\n";

          echo "-------------------------------------------------------------------"." \n"; //This lines is printed to mark the completion of an invoice
    }

?>
