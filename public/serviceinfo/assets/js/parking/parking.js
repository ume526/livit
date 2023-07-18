"use strict";
$(function(){
    var fnSprintf = function(str, prm){
        for(var i=0,imax=prm.length; i<imax; i++){
            str = str.replace(new RegExp("{%}"), prm[i]);
        }
        return str;
    };

    $.ajax({
        type    :"get",
        url     :"/serviceinfo/assets/js/parking/livit_parking.json",
        dataType:"json",
        data    :null,
        timeout :1000*4,
        error   :function(a,b,c){
            console.log([a,b,c]);
        },
        success :function(rtn){
            var mapdata = $.extend(true, {}, rtn);
            console.log(mapdata);

            var $lay = $("section.map .gmapbox .overlay");

            //generate HTML - map overlay
            (function(){
                var $box    = $lay.find(".eachwrap");
                var htmlstr = '';
                var fm      = '';
                fm += '<div class="each {%}" my_seq="{%}" my_pnum="{%}" my_cnum="{%}">';
                fm += '<div class="myname">';
                fm += '<p>{%}</p>';
                fm += '<p>{%}</p>';
                fm += '</div>';
                fm += '<div class="property">';
                fm += '<table>';
                fm += '<tr>';
                fm += '<td><p>所在地</p></td>';
                fm += '<td><p>{%}</p></td>';
                fm += '</tr>';
                fm += '<tr>';
                fm += '<td><p>月極駐車料金</p></td>';
                fm += '<td><p>{%}</p></td>';
                fm += '</tr>';
                fm += '<tr>';
                fm += '<td><p>舗装/未舗装</p></td>';
                fm += '<td><p>{%}</p></td>';
                fm += '</tr>';
                fm += '<tr>';
                fm += '<td><p>空き状況</p></td>';
                fm += '<td><p>{%}</p></td>';
                fm += '</tr>';
                fm += '{%}';
                fm += '</table>';
                fm += '</div>';
                fm += '<div class="inquiry">';
                fm += '<p><span>{%}</span>のお問合せ先</p>';
                fm += '<p>JR東日本東北総合サービス株式会社</p>';
                fm += '<p>{%}</p>';
                fm += '<p>{%}</p>';
                fm += '<p><span class="str">受付時間: <i>{%}</i></span><span class="pc">／</span><span class="str">TEL: <i>{%}</i></span></p>';
                fm += '</div>';
                fm += '</div>';
                var fm_sub1 = '';
                fm_sub1 += '<tr>';
                fm_sub1 += '<td><p>備考</p></td>';
                fm_sub1 += '<td><p>{%}</p></td>';
                fm_sub1 += '</tr>';
                for(var i=0,imax=mapdata.spot.length; i<imax; i++){ var v=mapdata.spot[i];
                    if(v.flg_del){
                        continue;
                    }
                    var myparent = [];
                    for(var i2=0,i2max=mapdata.zone.length; i2<i2max; i2++){ var v2=mapdata.zone[i2];
                        if(v.prefecture === v2.prefecture && v.country === v2.country){
                            myparent = $.extend({}, v2);
                            break;
                        }
                    }
                    var sub1 = '';
                    if(v.flg_note){
                        sub1 += fnSprintf(fm_sub1, [
                            v.note
                        ]);
                    }
                    htmlstr += fnSprintf(fm, [
                        v.prefecture_str,
                        v.seq,
                        v.prefecture_num,
                        v.country_num,
                        v.area,
                        v.spotname,
                        v.address,
                        v.price,
                        v.pavement,
                        v.capacity,
                        sub1,
                        myparent.country,
                        myparent.office,
                        myparent.address,
                        myparent.term,
                        myparent.tel
                    ]);
                }
                $box.html(htmlstr);
            })();

            //generate HTML - contact
            (function(){
                var $box    = $("section.contact .eachwrap");
                var htmlstr = '';
                var fm      = '';
                fm += '<div class="each {%}" my_seq="{%}" my_pnum="{%}" my_cnum="{%}">';
                fm += '<h2><p><span>{%}</span>のお問合せ先</p></h2>';
                fm += '<div class="excuse">';
                fm += '<p>※各駐車場の空き情報は掲載情報と異なる場合がございます。</p>';
                fm += '<p>※マップ上の駐車場の位置は、実際の駐車場の位置と異なる場合がございます。</p>';
                fm += '</div>';
                fm += '<div class="detail">';
                fm += '<div class="info">';
                fm += '<div class="myname">';
                fm += '<p>JR東日本東北総合サービス株式会社</p>';
                fm += '<p>{%}</p>';
                fm += '</div>';
                fm += '<div class="address">';
                fm += '<p>{%}</p>';
                fm += '<p>{%}</p>';
                //fm += '<p><a href="//www.google.com/maps?q={%},{%}" target="_blank">MAP</a></p>';
                fm += '</div>';
                fm += '<div class="tel">';
                fm += '<p>受付時間／{%}</p>';
                fm += '<p>TEL:{%}</p>';
                fm += '{%}';
                fm += '</div>';
                fm += '</div>';
                fm += '<div class="howto">';
                fm += '<div class="guide1">';
                fm += '<p>お申し込み方法</p>';
                fm += '<p>{%}</p>';
                fm += '</div>';
                fm += '<div class="guide2">';
                fm += '<p>契約時に必要となるもの<span>※契約に際し、お客さまに持ってきていただくもの</span></p>';
                fm += '<p>{%}</p>';
                fm += '</div>';
                fm += '</div>';
                fm += '</div>';
                fm += '{%}';
                fm += '</div>';
                var fm_sub1 = '';
                fm_sub1 += '<p>MAIL:<a href="mailto:{%}">{%}</a></p>';
                var fm_sub2 = '';
                fm_sub2 += '<div class="anew">';
                fm_sub2 += '<i><img src="/serviceinfo/assets/img/parking/pin_new.png" alt="NEW" /></i>';
                fm_sub2 += '{%}';
                fm_sub2 += '</div>';
                var fm_sub2_inner = '';
                fm_sub2_inner += '<dl>';
                fm_sub2_inner += '<dt><p>{%}</p></dt>';
                fm_sub2_inner += '<dd><p>{%}</p></dd>';
                fm_sub2_inner += '</dl>';
                for(var i=0,imax=mapdata.zone.length; i<imax; i++){ var v=mapdata.zone[i];
                    if(v.flg_del){
                        continue;
                    }
                    //mail
                    var sub1 = '';
                    if(v.flg_mail){
                        sub1 += fnSprintf(fm_sub1, [
                            v.mail,
                            v.mail
                        ]);
                    }
                    //anew
                    var sub2       = '';
                    var sub2_inner = '';
                    if(v.newslist.length){
                        for(var i2=0,i2max=v.newslist.length; i2<i2max; i2++){
                            sub2_inner += fnSprintf(fm_sub2_inner, [
                                v.newslist[i2][0],
                                v.newslist[i2][1]
                            ]);
                        }
                        sub2 += fnSprintf(fm_sub2, [
                            sub2_inner
                        ]);
                    }
                    //each
                    htmlstr += fnSprintf(fm, [
                        v.prefecture_str,
                        v.seq,
                        v.prefecture_num,
                        v.country_num,
                        v.country,
                        v.office,
                        v.address.split(" ")[0],
                        v.address.split(" ")[1],
                        //v.lat,
                        //v.lng,
                        v.term,
                        v.tel,
                        sub1,
                        v.howto1,
                        v.howto2,
                        sub2
                    ]);
                }
                $box.html(htmlstr);
            })();

            //google map - base
            var mapobj;
            var markerset = [];
            var markerimg = [
            ];
            mapobj = new google.maps.Map(document.getElementById("gmap1"), {
                //center         :(new google.maps.LatLng(0, 0)),
                zoom             :10,
                mapTypeId        :google.maps.MapTypeId.ROADMAP,
                panControl       :false,
                streetViewControl:false,
                zoomControl      :true,
                mapTypeControl   :false,
                scaleControl     :true
            });

            //google map - marker
            for(var i=0,imax=mapdata.spot.length; i<imax; i++){ var v=mapdata.spot[i];
                if(v.flg_del){
                    continue;
                }
                markerset.push(
                    new google.maps.Marker({
                        map      :mapobj,
                        position :(new google.maps.LatLng(v.lat, v.lng)),
                        zIndex   :(-1*i),
                        icon     :{
                            url       :(v.flg_new)?("/serviceinfo/assets/img/parking/pin_new.png"):("/serviceinfo/assets/img/parking/pin_spot_"+v.prefecture_str+".png"),
                            scaledSize:(v.flg_new)?(new google.maps.Size(80,108)):(new google.maps.Size(50,68)),
                        },
                        myprop   :{
                            seq :v.seq
                        }
                    })
                );
            }

            //google map - overlay
            var flg_changinginfo  = false;
            var fnChangeInfo      = function(seq, cb){if(cb==null)cb=function(){};
                $lay.find(".each").removeClass("appear")
                    .filter("[my_seq="+seq+"]").addClass("appear");
                $lay.show();
                cb();
            };
            $lay.on("click.closeoverlay", function(){
                $lay.hide();
            });
            $lay.find(".inbox").on("click.closeoverlay", function(ev){
                ev.stopPropagation();
            });
            $lay.find("label.close").on("click.closeoverlay", function(){
                $lay.on("click.closeoverlay").trigger("click");
            });
            for(var i=0,imax=markerset.length; i<imax; i++){
                markerset[i].addListener("click", function(){
                    if(flg_changinginfo){
                        return;
                    }
                    flg_changinginfo = true;

                    var me = this;
                    me.setAnimation(google.maps.Animation.BOUNCE);
                    setTimeout(function(){
                        me.setAnimation(null);
                        fnChangeInfo(me.myprop.seq, function(){
                            flg_changinginfo = false;
                        });
                    }, 400);
                });
            }

            //tab
            var flg_tabworking = false;
            $(document).on("click.zonetab", function(){
                if(flg_tabworking){
                    return;
                }
                $("section.map .tabbox li.appear").removeClass("appear");
            });
            $("section.map .tabbox li").on("click.zonetab", function(ev){
                ev.stopPropagation();

                if(flg_tabworking){
                    return;
                }
                flg_tabworking = true;
                if($(this).hasClass("appear")){
                    $(this).removeClass("appear");
                }else{
                    $("section.map .tabbox li").removeClass("appear");
                    $(this).addClass("appear");
                }
                setTimeout(function(){
                    flg_tabworking = false;
                }, 500);
            });
            $("section.map .tabbox li .child label").on("click.zonetab", function(ev, mode){ if(mode==null)mode="normal";
                var currval  = $(this).attr("my_val")*1;

                if(mode === "visit"){
                    ev.stopPropagation();
                }
                $("section.map .tabbox li .parent label").removeClass("curr")
                $(this).closest("li").find(".parent label").addClass("curr");
                $("section.map .tabbox li .child label").removeClass("curr")
                $(this).addClass("curr");
                $lay.hide();

                //tab
                var currinfo = {};
                for(var i=0,imax=mapdata.zone.length; i<imax; i++){ var v=mapdata.zone[i];
                    if(v.country_num === currval){
                        currinfo = $.extend({}, v);
                        break;
                    }
                }

                //tip
                $("section.map .gmapbox .tip").attr({my_pnum:currinfo.prefecture_num}).text(currinfo.country);

                //map
                mapobj.panTo(new google.maps.LatLng(currinfo.lat,currinfo.lng));
                mapobj.setZoom(currinfo.zoom);
                //contact
                $("section.contact .each").removeClass("appear")
                    .filter("[my_cnum="+currinfo.country_num+"]").addClass("appear");
                //b-times
                $("section.reserve .each").removeClass("appear")
                    .filter("[my_pnum="+currinfo.prefecture_num+"]").addClass("appear");
            });

            //first select
            (function(){
                var pstr = "miyagi";
                var prm  = "";
                if(location.search){
                    prm = location.search.replace("?", "");
                    if(["aomori","iwate","akita","miyagi","yamagata","fukushima"].indexOf(prm) !== -1){
                        pstr = prm;
                    }
                }
                $("section.map .tabbox li").filter("."+pstr).find(".child label").eq(0).trigger("click", "visit");
            })();

            //finish
            $("html").animate({opacity:1}, 1000*2, "linear");
        }
    });

}); // end of wrap func

