/*
*county reports
*/

$('#generate_pdf').click(function(){
	$('.imagetext, .table').printThis({
	debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "http://localhost/LBDA/templates/vendors/bootstrap/dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Lake Basin Development Authority",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",               	// prefix to html
        footer: null,               // postfix to html
        base: "",                // preserve the BASE tag or accept a string for the URL
        formValues: true,  // preserve input/form values
        canvas: true,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null     
	});
})  

/*
*Schools reports
*/
$('#generate_pdf_schools').click(function(){
        $('.imagetext, #schoolsreport').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "http://localhost/LBDA/templates/vendors/bootstrap/dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Lake Basin Development Authority",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",                     // prefix to html
        footer: null,               // postfix to html
        base: "",                // preserve the BASE tag or accept a string for the URL
        formValues: true,  // preserve input/form values
        canvas: true,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null     
        });
}) 
/*
*Sub county reports
*/
$('#generate_pdf_subcounty').click(function(){
        $('.imagetext, #subcountyreports').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "http://localhost/LBDA/templates/vendors/bootstrap/dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Lake Basin Development Authority",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",                     // prefix to html
        footer: null,               // postfix to html
        base: "",                // preserve the BASE tag or accept a string for the URL
        formValues: true,  // preserve input/form values
        canvas: true,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null     
        });
}) 

/*
*Ward reports
*/
$('#generate_pdf_ward').click(function(){
        $('.imagetext, #wardreports').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "http://localhost/LBDA/templates/vendors/bootstrap/dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Lake Basin Development Authority",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",                     // prefix to html
        footer: null,               // postfix to html
        base: "",                // preserve the BASE tag or accept a string for the URL
        formValues: true,  // preserve input/form values
        canvas: true,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null     
        });
}) 

/*
*Location reports
*/
$('#generate_pdf_location').click(function(){
        $('.imagetext, #locationreports').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "http://localhost/LBDA/templates/vendors/bootstrap/dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Lake Basin Development Authority",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",                     // prefix to html
        footer: null,               // postfix to html
        base: "",                // preserve the BASE tag or accept a string for the URL
        formValues: true,  // preserve input/form values
        canvas: true,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null     
        });
}) 