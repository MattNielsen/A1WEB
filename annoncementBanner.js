/**
 * Created by Matthew on 27/08/2016.
 */

function displayAnnouncements() {
    var announcementOne = "4 drinks for the price of 3 at the bar during August.";
    var announcementTwo = "20% off registration for new teams next season.";
    var announcementThree = "Slammer's Tournament: Get your nomination in now for the next 4-a-side" +
        " weekend competition.";
    var announcementFour = "New seasons starts August 21st";
    var announcements = ["4 drinks for the price of 3 at the bar during August.",
        "20% off registration for new teams next season.", "Slammer's Tournament: Get your nomination in now for" +
        " the next 4-a-side weekend competition.", "New seasons starts August 21st"];
    // document.getElementById("announcement-box").innerHTML = announcementOne;
    for (var items in announcements) {
        console.log(items);
    }


}
