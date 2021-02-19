$(document).ready(function () {
    // var upcoming = $('#fixtures_box').find(".upcoming-item");
    var upcoming = $("div[data-category-code='FOOTBALL']");
    var epoch = '', league_detail = '', home_team = '', home_team_logo = '', away_team = '', away_team_logo = '', obj = '', count = 1;
    ;
    console.log('get fixtures');
    console.log('upcoming size:' + upcoming.length);
    $.each(upcoming, function (key, item) {
        epoch = $(item).attr('data-epoch-start');

        //league_detail
        obj = $(item).find('.league-detail');
        league_detail = $(obj).attr('title');


        //home-team
        obj = $(item).find('.home-team');
        var objName = $(obj).find('.name');
        home_team = objName.text();
        var img = $(obj).find('img');
        home_team_logo = $(img).attr('src');

        //home-team
        obj = $(item).find('.away-team');
        var objName = $(obj).find('.name');
        away_team = objName.text();
        var img = $(obj).find('img');
        away_team_logo = $(img).attr('src');
        if (epoch !== null && league_detail !== null && typeof (league_detail) !== 'undefined' && home_team !== null && home_team_logo !== null && away_team !== null && away_team_logo !== null) {
            console.log(epoch + league_detail + home_team + away_team);
            if(count%2 ===1){
                createLine(epoch, league_detail, home_team, home_team_logo, away_team, away_team_logo,'A');
            }else{
                createLine(epoch, league_detail, home_team, home_team_logo, away_team, away_team_logo,'B');
            }
            
            count++;
        }

        if (count === 9) {
            return false;
        }

    });

    function createLine(epoch, league_detail, home_team, home_team_logo, away_team, away_team_logo,type) {
        var str = '';
        str = str + '<div class="row g-brd-bottom g-brd-gray-light-v4 g-rounded-3 g-pt-20 no-gutters">';
        str = str + ' <div class="col-md-2 col-4">';
        str = str + '     <img class="w-100 rounded-circle" src="' + home_team_logo + '" alt="">';
        str = str + ' </div>';
        str = str + ' <div class="col-md-2 col-4">';
        str = str + '     <img class="w-100 rounded-circle" src="' + away_team_logo + '" alt="">';
        str = str + ' </div>';

        str = str + ' <div class="align-self-center col-md-8 col-12">';
        str = str + '     <h5 class="h4 g-color-primary f-promppt-500 g-mb-3"><span class="g-mr-5">' + home_team + ' VS ' + away_team + '</span></h5>';
        str = str + '     <span class="u-label u-label--lg g-bg-blue g-rounded-20 g-px-10">' + epochToDate(epoch) + '</span>';
        str = str + '     <p class="g-color-white">'+league_detail+'</p>';
        str = str + ' </div>';

        str = str + '</div>';
        if(type ==='A'){
            $("#fixtures_box").append(str);
        }else{
            $("#fixtures_box_b").append(str);
        }
        
    }

    function epochToDate(epoch) {
        if (epoch < 10000000000)
            epoch *= 1000; // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
        var epoch = epoch + (new Date().getTimezoneOffset() * -1); //for timeZone    
        var d = new Date(epoch);

        var curr_day = d.getDate();
        var curr_month = d.getMonth()+1;
        var curr_year = d.getFullYear();

        var curr_hour = d.getHours();
        var curr_min = d.getMinutes();
        //var curr_sec = d.getSeconds();
        
        return curr_day+'/'+curr_month+'/'+curr_year+' '+curr_hour+':'+curr_min;
    }

});