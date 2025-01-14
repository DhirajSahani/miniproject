function electronics_retailer_open_tab(evt, cityName) {
    var electronics_retailer_i, electronics_retailer_tabcontent, electronics_retailer_tablinks;
    electronics_retailer_tabcontent = document.getElementsByClassName("tabcontent");
    for (electronics_retailer_i = 0; electronics_retailer_i < electronics_retailer_tabcontent.length; electronics_retailer_i++) {
        electronics_retailer_tabcontent[electronics_retailer_i].style.display = "none";
    }
    electronics_retailer_tablinks = document.getElementsByClassName("tablinks");
    for (electronics_retailer_i = 0; electronics_retailer_i < electronics_retailer_tablinks.length; electronics_retailer_i++) {
        electronics_retailer_tablinks[electronics_retailer_i].className = electronics_retailer_tablinks[electronics_retailer_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});