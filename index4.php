<script type="text/javascript" src="casper.js">
    var casper = require("casper").create({
    pageSettings: {
        userAgent: "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.71 Safari/537.36"
    }
});
var url = 'https://www.rozee.pk/category/client-services-customer-support-jobs';//Type your url
casper.start(url);//Start CasperJS
casper.waitForSelector('#content', processPage, stopScript);//Wait until content loads and then process the page
casper.run();


var stopScript = function() {
    casper.echo("STOPPING SCRIPT").exit();
};
var processPage = function() {
    pageData = this.evaluate(getPageData);//getPageData is your function which will do data scraping from the page. If you need to extract data from tables, from divs write your logic in this function
    
    //If there is no nextButton on the page, then exit a script because we hit the last page
    if (this.exists("#nextButton") == false) {
        stopScript();
    }

    //Click on the next button
    this.thenClick("#nextButton").then(function() {
        this.waitForSelector("#content",processPage, stopScript);
    });
};
function getPageData(){
    /*
    In this function you can put anything you want in order to extract your data from the website.
    NOTE: This function is executed in page context, and will should be called as parameter to Casper's evaluate function.
    */
    return document.title;//For the sake of simplicity I will just extract website title and return it.
}
</script>