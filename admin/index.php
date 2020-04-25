<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>
    </script>
    <script type="text/javascript" src="js/print-save.js"></script>
    <script type="text/javascript" src="js/example.js"></script>
</head>

<body>
    <div id="pdfSheet">
        <div class="mt-4" id="page-wrap">

            <p id="header">INVOICE</p>

            <div id="identity">
                <p id="address">
                    Mother Duckin Shop <br>
                    Duck Street 4<br>
                    Duck City, Ducking Land<br>&nbsp;<br>
                    Phone: 99885522
                </p>
                <div id="logo">
                    <img id="image" src="../assets/images/Logo1.png" alt="logo" />
                </div>
            </div>

            <div style="clear:both"></div>

            <div id="customer">

                <textarea id="customer-title"></textarea>

                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td><textarea>000123</textarea></td>
                    </tr>
                    <tr>

                        <td class="meta-head">Date</td>
                        <td><textarea id="date">December 15, 2009</textarea></td>
                    </tr>
                    <tr>
                        <td class="meta-head">Amount Due</td>
                        <td>
                            <div class="due">$875.00</div>
                        </td>
                    </tr>

                </table>

            </div>

            <table id="items">

                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                <tr class="item-row">
                    <td class="item-name">
                        <div class="delete-wpr"><textarea>Name</textarea><a class="delete" href="javascript:;"
                                title="Remove row">X</a></div>
                    </td>
                    <td class="description">
                        <textarea>Put the description here</textarea></td>
                    <td><textarea class="cost">$650.00</textarea></td>
                    <td><textarea class="qty">1</textarea></td>
                    <td><span class="price">$650.00</span></td>
                </tr>

                <tr id="hiderow">
                    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                </tr>

                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Subtotal</td>
                    <td class="total-value">
                        <div id="subtotal">$875.00</div>
                    </td>
                </tr>
                <tr>

                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Total</td>
                    <td class="total-value">
                        <div id="total">$875.00</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Amount Paid</td>

                    <td class="total-value"><textarea id="paid">$0.00</textarea></td>
                </tr>
                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line balance">Balance Due</td>
                    <td class="total-value balance">
                        <div class="due">$875.00</div>
                    </td>
                </tr>

            </table>

        </div>
    </div>
    <div class="text-center mb-5">
        <button type="button" class="btn btn-outline-secondary" id="pdfDownloader">Download PDF</button>
    </div>


</body>

</html>

<style>

#pdfSheet {
	background-color: white;
	}
    
#image {
    height: 100px;
    width: 100px;
}

#page-wrap {
    width: 800px;
    margin: 0 auto;
    padding-bottom: 40px;
    
}

textarea {
    border: 0;
    overflow: hidden;
    resize: none;
}

table {
    border-collapse: collapse;
}

table td,
table th {
    border: 1px solid black;
    padding: 5px;
}

#header {
    width: 100%;
    margin: 10px 0;
    background: #222;
    text-align: center;
    color: white;
    text-decoration: uppercase;
    letter-spacing: 20px;
    padding: 8px 0px;
}

#address {
    width: 300px;
    height: 150px;
    float: left;
}

#customer {
    overflow: hidden;
}

#logo {
    text-align: right;
    float: right;
    position: relative;
    margin-top: 25px;
    max-width: 540px;
    max-height: 100px;
    overflow: hidden;
}


#customer-title {
    font-size: 20px;
    font-weight: bold;
    float: left;
}

#meta {
    margin-top: 1px;
    width: 300px;
    float: right;
}

#meta td {
    text-align: right;
}

#meta td.meta-head {
    text-align: left;
    background: #eee;
}

#meta td textarea {
    width: 100%;
    height: 20px;
    text-align: right;
}

#items {
    clear: both;
    width: 100%;
    margin: 30px 0 0 0;
    border: 1px solid black;
}

#items th {
    background: #eee;
}

#items textarea {
    width: 80px;
    height: 50px;
}

#items tr.item-row td {
    border: 0;
    vertical-align: top;
}

#items td.description {
    width: 300px;
}

#items td.item-name {
    width: 175px;
}

#items td.description textarea,
#items td.item-name textarea {
    width: 100%;
}

#items td.total-line {
    border-right: 0;
    text-align: right;
}

#items td.total-value {
    border-left: 0;
    padding: 10px;
}

#items td.total-value textarea {
    height: 20px;
    background: none;
}

#items td.balance {
    background: #eee;
}

#items td.blank {
    border: 0;
}

textarea:hover,
textarea:focus,
#items td.total-value textarea:hover,
#items td.total-value textarea:focus,
.delete:hover {
    background-color: #EEFF88;
}

.delete-wpr {
    position: relative;
}

.delete {
    display: block;
    color: #000;
    text-decoration: none;
    position: absolute;
    background: #EEEEEE;
    font-weight: bold;
    padding: 0px 3px;
    border: 1px solid;
    top: -6px;
    left: -22px;
    font-size: 12px;
}
</style>