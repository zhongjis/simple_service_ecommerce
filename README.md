Name: Zhongjie Shen, Christopher Zhao
UCInetID: zhongjis, cjzhao
Student ID: 26688124, 34508906

Site URL: http://centaurus-1.ics.uci.edu:1077/

phpMyAdmin:
uername: root
password: inf124

Site Layout:
    Main: index.html (About Us), product.html (Product Page)
    Individual Products: multiple sites can be found on http://centaurus-1.ics.uci.edu:1077/product.html

Requirements:
   1.  You want to use PHP and MySQL database to generate the product information dynamically. The information about available products should be read from one or more tables in your database and the corresponding HTML pages describing the details of your products should be generated dynamically. You will use PHP to query your MySQL database to obtain the details of a product and generate the proper content in HTML format. 

    (http://centaurus-1.ics.uci.edu:1077/product.html)




    2.  When the user submits a form to order a product, instead of sending an email from the client-side, as you did in first assignment, the request should be sent to a server-side PHP script that stores that information in a database table. The form should be validated to prevent insertion of bad data in your database. 

    (under products in http://centaurus-1.ics.uci.edu:1077/product.html, it will be redirect to confirmation.php after order submission, validation is achieved with product.js)




    3.  After successfully storing the order information in a database table, a dynamically generated confirmation page should to be displayed to the user with the details of the order. 

    (after submitting the form in one of the products under http://centaurus-1.ics.uci.edu:1077/product.html)





    4. Use Ajax to make your website dynamic and interactive. Among others, you could use Ajax to assist the user with filling the order forms, e.g., when the user chooses a particular state for delivery, obtain the corresponding tax rate from the backend database to update the total price for the product dynamically, or as another example, provide auto complete capability, such as suggesting states as the user types the name of a state. You can use these files to help with this task: zip codesPreview the document and tax ratesPreview the document. You have freedom in identifying other opportunities for using Ajax in making your website dynamic and interactive. At the very least, your website should make use of Ajax for two non-trivial features that the grader can verify. 

    (under products in http://centaurus-1.ics.uci.edu:1077/product.html , city, state, and tax rates are generated with Ajax)
