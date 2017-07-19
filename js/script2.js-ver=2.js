function ValidPhone(phone) {
    var re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    var myPhone = phone
    var valid = re.test(myPhone);
    if (valid) output = 'OK';
    else output = 'ERROR';
    
    return output;
} 


function showcity()
{
document.getElementById("city-window").style.top="340px";
document.getElementById("city-window").style.display="block";
}


$(function() {
// ������� ������� ��������� � ���� ��������

var coordofhead=$("#header").offset().top;
$(window).scroll(function(){
    
var distanceTop = 147;
// ���� �������� ��������� ������ distanceTop 
if  ($(window).scrollTop() > coordofhead)
{
    if ((getComputedStyle(document.getElementById('header'),null).position)!="fixed")
        document.getElementById('header').style.position="fixed" ;
}       
 
else document.getElementById('header').style.position="relative";

});

});



function getClientWidth() {

    return window.document.compatMode == 'CSS1Compat' && !window.opera ?

               document.documentElement.clientWidth : document.body.clientWidth;

}


function trim (str, charlist) {
		// Strips whitespace from the beginning and end of a string  
		// 
		// version: 909.322
		// discuss at: http://phpjs.org/functions/trim    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
		// +   improved by: mdsjack (http://www.mdsjack.bo.it)
		// +   improved by: Alexander Ermolaev (http://snippets.dzone.com/user/AlexanderErmolaev)
		// +      input by: Erkekjetter
		// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)    // +      input by: DxGx
		// +   improved by: Steven Levithan (http://blog.stevenlevithan.com)
		// +    tweaked by: Jack
		// +   bugfixed by: Onno Marsman
		// *     example 1: trim('    Kevin van Zonneveld    ');    // *     returns 1: 'Kevin van Zonneveld'
		// *     example 2: trim('Hello World', 'Hdle');
		// *     returns 2: 'o Wor'
		// *     example 3: trim(16, 1);
		// *     returns 3: 6    
		var whitespace, l = 0, i = 0;
		str += '';
		
		if (!charlist) {
			//default list        
			whitespace = " \n\r\t\f\x0b\xa0\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u200b\u2028\u2029\u3000";
		} else {
			// preg_quote custom list
			charlist += '';
			whitespace = charlist.replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '$1');    }
		
		l = str.length;
		for (i = 0; i < l; i++) {
			if (whitespace.indexOf(str.charAt(i)) === -1) {            str = str.substring(i);
				break;
			}
		}
			l = str.length;
		for (i = l - 1; i >= 0; i--) {
			if (whitespace.indexOf(str.charAt(i)) === -1) {
				str = str.substring(0, i + 1);
				break;        }
		}
		
		return whitespace.indexOf(str.charAt(0)) === -1 ? str : '';
	}



window.onresize = function ()
{
    ClientWidth=getClientWidth();
    
    if (ClientWidth<1100) 
{
    document.getElementById("header-slogan").style.display="none";
    document.getElementById("header-left").style.left="10px";
} 
 else
 {
    document.getElementById("header-slogan").style.display="block";
    document.getElementById("header-left").style.left="150px";
 }
}


$(document).ready(function(){


$("#order-nodelivery").change(function(){ 
  if($(this).attr("checked")){ 
    $(".order-streetbox").slideUp();
    $("#order-delivery-block").slideDown();
    $("#order-date-label").html("���� ����������");     
    $("#order-time-label").html("����� ����������");
  }else{ 
    $("#order-delivery-block").slideUp();
   $(".order-streetbox").slideDown();
   $("#order-date-label").html("���� ��������");
   $("#order-time-label").html("����� ��������");
  } 
});



ClientWidth=getClientWidth();
if (ClientWidth<1100) 
{
    document.getElementById("header-slogan").style.display="none";
    document.getElementById("header-left").style.left="10px";
} 
else
{
    document.getElementById("header-slogan").style.display="block";
    document.getElementById("header-left").style.left="150px";
}



$('input[placeholder], textarea[placeholder]').placeholder();


    
    $("#city-url").click(function () {
      document.getElementById("overlay").style.display="block";
      document.getElementById("city-window").style.display="block";
    });
    
    
    $("#overlay").click(function () {
    
    if (document.getElementById("overlay")) document.getElementById("overlay").style.display="none";
    if (document.getElementById("city-window")) document.getElementById("city-window").style.display="none";
    if (document.getElementById("element-window")) document.getElementById("element-window").style.display="none";
    if (document.getElementById("modal-window")) document.getElementById("modal-window").style.display="none";
    if (document.getElementById("popup-window")) document.getElementById("popup-window").style.display="none";
    if (document.getElementById("popup-okno")) document.getElementById("popup-okno").style.display="none";
    if (document.getElementById("your-city-window-in")) document.getElementById("your-city-window-in").style.display="none";

      
    });
    
        $("#popup-okno-ok").click(function () 
        {
            if (document.getElementById("popup-okno")) document.getElementById("popup-okno").style.display="none";
            if (document.getElementById("overlay")) document.getElementById("overlay").style.display="none";
        });
    
    
    
    
$( "#header-basket" ).hover(function() {
    
    abc=$(this).find('#basket-popup');
    if (abc.hasClass('active')) abc.fadeIn(100);
    
    
    
    });


$( "#header-basket").mouseleave (function() {
    
    $(this).find('#basket-popup').fadeOut(100);
    
    });


$( "#change-bar" ).hover(function() {
    
    abc=$(this).find('#change-bar-window');
    abc.fadeIn(100);
    $(this).find('#change-param').css({"color":"#c10116","border-color":"#c10116"})
    });


$( "#change-bar").mouseleave (function() {
    
    $(this).find('#change-bar-window').fadeOut(100);
    $(this).find('#change-param').css({"color":"white","border-color":"white"})
    });
    

$("#order-nodelivery").change(function(){ 
  if($("#order-nodelivery").attr("checked"))
  { 
  
   $.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"getprice",delivery:"1"},function(data){
                            
                            $("#order-allsum-discont").html(data["discont_price"]); 
                            
                        
		                  },"json");
                                                                                                
                        
  }
  else{ 
   $.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"getprice",delivery:"0"},function(data){
                             
                            $("#order-allsum-discont").html(data["discont_price"]);
                        
		                  },"json");
   
   
  } 
});
    
    //$("#basket-popup-items").mCustomScrollbar();
    //$("#basket-popup-items").niceScroll({touchbehavior:false,zindex:9999,cursorcolor:"#00F",cursoropacitymax:0.7,cursorwidth:6,background:"#ccc",autohidemode:false}).cursor.css({"background-image":"url(/img/scroll.png)"});
    
                    
    });

  
    
    

function closemodal()
{
    if (document.getElementById("overlay")) document.getElementById("overlay").style.display="none";
    if (document.getElementById("city-window")) document.getElementById("city-window").style.display="none";
    if (document.getElementById("element-window")) document.getElementById("element-window").style.display="none";
    if (document.getElementById("modal-window")) document.getElementById("modal-window").style.display="none";
    if (document.getElementById("popup-window")) document.getElementById("popup-window").style.display="none";
    if (document.getElementById("your-city-window-in")) document.getElementById("your-city-window-in").style.display="none";
           
}    
    

    
function element_window(id) {
      document.getElementById("overlay").style.display="block";
      document.getElementById("element-window").style.display="block";
      $("#element-window").empty();
      
      	$.post("../../../../menu/ajax_element.php.htm"/*tpa=http://www.arisushi.ru/menu/ajax_element.php*/,{id:id},function(data){
			
            
            $("#element-window").append(data);
            $("#element-window").append('<div id="close-window"  onclick="closemodal();"></div>');
		});
    };    
    

function show_action_about()
{
      document.getElementById("overlay").style.display="block";
      document.getElementById("action-about-window").style.display="block";
};

function show_modal()
{
      document.getElementById("overlay").style.display="block";
      document.getElementById("modal-window").style.display="block";
};


    
$(function(){
    $("#city-window-items a").live("click", function(){
                                    gorod = $(this).attr('id');
									post = {action: "clear", city: gorod};
									
									$.post(
											"../../../../order/city_ajax.php.htm"/*tpa=http://www.arisushi.ru/order/city_ajax.php*/, 
											post,
											function(html)
											{
												if(html != "ERROR")
												{
									//				$("#basket_all").empty().append(html);
													
										
													
										//			$("#choose-city-window").hide();
													
													//changeCity(tel, gorod, xxcity);
												}
												else
												{
													alert("������!");
												}
                                                
                                                if 	(gorod=="nvk") location = "http://arisushi-nk.ru/";
                                                else if (gorod=="kem") location = "http://arisushi-nk.ru/";
												    else location = "../../../../index.htm"/*tpa=http://www.arisushi.ru/*/;
											},
											"html"
									);	
								});
    
    
    });
  /*
$(function(){    
	$('.pb-pop-controls span').click(function(){
		pbc = $(this); 
        alert(pbc);
		if (!pbc.hasClass('pb-pop-c-inactive')) {
			if (pbc.hasClass('pb-pop-c-inc')) {
				b = pbc.parent().find('b');
				current = parseInt(b.html())+1;
				b.html(current);
				rstring = b.attr("id");
				rstring = rstring.substr(1,rstring.length);
                                $('#QUANTITY' + rstring).val(current);
				if ((current) == 99) {
					pbc.addClass('pb-pop-c-inactive')
				};
				if ((current) > 0) {
					pbc.parent().find('.pb-pop-c-dec').removeClass('pb-pop-c-inactive');
				};
			} else {
				b = pbc.parent().find('b');
				current = parseInt(b.html())-1;
				b.html(current);
                                rstring = b.attr("id");
				rstring = rstring.substr(1,rstring.length);
                                $('#QUANTITY' + rstring).val(current);
				if ((current) == 0) {
					pbc.addClass('pb-pop-c-inactive')
				};
				if ((current) < 99) {
					pbc.parent().find('.pb-pop-c-inc').removeClass('pb-pop-c-inactive');
				};
			};
		};
	});
    
});        
*/


	function add_one_tovar(pbc,tovar,params)
	{
	var pbc=$(pbc);   
        
    if (!pbc.hasClass('pb-pop-c-inactive')) {
            
            if ($("#order-nodelivery").attr("checked")) delivery=1; else delivery=0; 
                        
			$.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"add",add:tovar,quantity:1,delivery:delivery},function(data){
        
            $('#order-allsum').html(data["sum"]);
            $("#order-allsum-discont").html(data["discont"]);
               
            basket_popup_sum=$('#popup-sum'+data["product_id"]);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"]);
            
            if (data["quant_cur"]==1) pbc.parent().find('.pb-pop-c-dec-order').replaceWith( '<span class="pb-pop-c-dec pb-pop-c-dec-order" onclick="dec_tovar(this,'+data['id']+');"></span>');
            
            b = pbc.parent().find('b');
            current = parseInt(b.html())+1;
			b.html(current);
            
            newdataid=data['sum'];
            
            if ((current) > 98) {
					pbc.addClass('pb-pop-c-inactive')
				};
            
            pbc.parent().find('.pb-pop-c-dec').removeClass('pb-pop-c-inactive');
        
            if (pbc.hasClass('pb-pop-c-inc-grey')) //��� ����������� �������
            {
                sum_text=pbc.parent().parent().find('.sum-of-items');
                sum=data["price_all"];
                sum_text.empty();
                sum_text.append(sum);
                $('#d'+data["product_id"]).empty();
                $('#d'+data["product_id"]).append(current);
                
                $('#basket_all').empty();
                var textdiv="<div class='order-coast-text'>"+data["sum"]+" ���.</div><a href='http://www.arisushi.ru/order/' class='order-bottom'>��������</a><div style='clear:both'>";
    			$('#basket_all').append(textdiv);
                $('#basket-popup-allcoast-value').empty();
                $('#basket-popup-allcoast-value').append(data["sum"]);
                
                $('#basket-popup-kolvo-value').empty();
                $('#basket-popup-kolvo-value').append(data["sumkol"]);
                
                
            }
            
            else //��� ��������� ����
            
            {
             //����������� ���� ����������
             if (!pbc.hasClass('pb-pop-c-inc-order'))
                {             
 
                    basket_popup_num=$('#basket-popup-items').find('#popup-d'+data["product_id"]);
                    basket_popup_num.empty();
                    basket_popup_num.append(current);
                    
                    basket_popup_sum=$('#basket-popup-items').find('#popup-sum'+tovar);
                    basket_popup_sum.empty()
                    basket_popup_sum.append(data["price_all"])
                    //
                } 
            }
            
            //��� �������� ���������� ������ 
            if (pbc.hasClass('pb-pop-c-inc-order'))
            {
                    basket_popup_sum=$('#popup-sum'+tovar);
                    basket_popup_sum.empty();
                    basket_popup_sum.append(data["price_all"]);
                    if ($("#order-nodelivery").attr("checked")) {$("#order-allsum-discont").html(data["discont"]);}
                    
                    spec=parseInt(pbc.data("spec"));
                    
                    if (spec>=1)  
                    
                            {
                                $('.specii').each(function(i)
                                {
                                  a=$(this);
                                 
                                 buy_spec=parseInt(a.html())-parseInt(data["specii_old"]);
                                 newcolvo=buy_spec+parseInt(data["specii"]);
                                 a.html(newcolvo);
                                 }
                                
                                );
                            }
                    
                    
            }
            
            
            if (pbc.hasClass('pb-pop-c-inc-window'))
            {
                $('#menu-items').find('#d'+tovar).html(current);
            }
            
            },"json");
        }
        
	}




	function add_tovar(pbc,tovar,params)
	{
	var pbc=$(pbc);   
    var garnir;
    var sous;
    
    //��������� ���������
	    if (params=="chinees")
        {
            garnir=$("#selectgarnir"+tovar).val();
            sous=$("#selectsous"+tovar).val();
            
            if ((garnir=="none")||(garnir=="")) {alert ("�������� ������");return false;}
            else 
               if ((sous=="none")||(sous=="")) {alert ("�������� ����");return false;}
               
        }
        
    //��������� ��������� � ����    
        if (params=="chinees-window")
        {
            garnir=$("#element-window").find("#selectgarnir"+tovar).val();
            sous=$("#element-window").find("#selectsous"+tovar).val();
            
            if ((garnir=="none")||(garnir=="")) {alert ("�������� ������");return false;}
            else 
               if ((sous=="none")||(sous=="")) {alert ("�������� ����");return false;}
               
        }
    
        
        
        
    if (!pbc.hasClass('pb-pop-c-inactive')) {
            
            if ($("#order-nodelivery").attr("checked")) delivery=1; else delivery=0;            
			$.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"new",add:tovar,quantity:1,garnir:garnir,sous:sous,delivery:delivery},function(data){
			 
             
			b = pbc.parent().find('b');
            current = data["quant_cur"]; //parseInt(b.html())+1;
			b.html(current);
            newdataid=data['sum'];
 
            function headerbasket()
            {
                
            } 
             
             
        //��� ��������� ��������
        if ((pbc.hasClass('pb-pop-c-inc-catalog'))||(pbc.hasClass('pb-pop-c-inc-window')))
        {             
			$('#basket_all').empty();
            var textdiv="<div class='order-coast-text'>"+data["sum"]+" ���.</div><a href='http://www.arisushi.ru/order/' class='order-bottom'>��������</a><div style='clear:both'>";
			$('#basket_all').append(textdiv);
            $('#basket-popup-allcoast-value').empty();
            $('#basket-popup-allcoast-value').append(data["sum"]);
            
            $('#basket-popup-kolvo-value').empty();
            $('#basket-popup-kolvo-value').append(data["sumkol"]);
            
            
            basket_popup_num=$('#basket-popup-items').find('#popup-d'+data['id']);
            basket_popup_num.empty();
            basket_popup_num.append(data["quant_cur"]);
            basket_popup_sum=$('#basket-popup-items').find('#popup-sum'+data['id']);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"]);
            
            // ��� ������ � �����-����            
            if (pbc.hasClass('pb-pop-c-inc-window'))
            {
                $('#menu-items').find('#d'+tovar).html(data["quant_cur"]);
                                
            }
            
            //���� ������ �����
            
            if ((data['id']!=null)&&(data['id']!="")&&(current==1))
            
             {
                pbc.parent().find('.pb-pop-c-dec').replaceWith( '<span class="pb-pop-c-dec " onclick="dec_tovar(this,'+data['id']+');"></span>');
                
                $('#basket-popup-items').append(data['maket']);
                $('#basket-popup').addClass('active');
             }
            
                                                            
        }
        
        
        
        //��� ����������� �������

            if (pbc.hasClass('pb-pop-c-inc-grey')) 
            {
                sum_text=pbc.parent().parent().find('.sum-of-items');
                sum=data["price_all"];
                sum_text.empty();
                sum_text.append(sum);
                $('#d'+tovar).empty();
                $('#d'+tovar).append(current);
                
            }
        
        //-----------------------------------------------------------------
        
        //��� ������� ���������� ������
         if (pbc.hasClass('pb-pop-c-inc-order'))
         
         {
            
            $('#order-allsum').html(data["sum"]);
            
            $("#order-allsum-discont").html(data["discont"]);
               
               
            basket_popup_sum=$('#popup-sum'+tovar);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"]);
            
            
            
            if (data["quant_cur"]==1) pbc.parent().find('.pb-pop-c-dec-order').replaceWith( '<span class="pb-pop-c-dec pb-pop-c-dec-order" onclick="dec_tovar(this,'+data['id']+');"></span>');
            
            
            //���� ������ �����
            
            if ((data['id']!=null)&&(data['id']!="")&&(current==1))
            
             {
                pbc.parent().find('.pb-pop-c-dec').replaceWith( '<span class="pb-pop-c-dec pb-pop-c-dec-order" onclick="dec_tovar(this,'+data['id']+');"></span>');
                
                $('#basket-popup-items').append(data['maket']);
                $('#basket-popup').addClass('active');
             }
            
         }
          
          //��� ������
          if (pbc.hasClass('pb-pop-c-inc-specii'))
         
         {
            $('#order-allsum').html(data["sum"]);
            
            $("#order-allsum-discont").html(data["discont"]);
               
            basket_popup_sum=$('#popup-sum'+tovar);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"]);
            if (data["quant_cur"]==1) pbc.parent().find('.pb-pop-c-dec-order').replaceWith( '<span class="pb-pop-c-dec pb-pop-c-dec-specii" onclick="dec_tovar(this,'+data['id']+');"></span>');
            
            
            //���� ������ �����
            
            if ((data['id']!=null)&&(data['id']!="")&&(current==1))
            
             {
                pbc.parent().find('.pb-pop-c-dec').replaceWith( '<span class="pb-pop-c-dec pb-pop-c-dec-specii" onclick="dec_tovar(this,'+data['id']+');"></span>');
                
                $('#basket-popup-items').append(data['maket']);
                $('#basket-popup').addClass('active');
             }
             
            colspec=parseInt(data["quant_cur"])+parseInt(data["specii"]);
            b.html(colspec);
            
         }
            
        //-----------------------------------------------------------------            
            
            if ((current) > 98) {
					pbc.addClass('pb-pop-c-inactive')
				};
            
            pbc.parent().find('.pb-pop-c-dec').removeClass('pb-pop-c-inactive');
            
        // ��� ��������    
		if ((params=="chinees")&&(data["new"]=="yes")&&(current!=1))
        {
            $('#basket-popup-items').append(data['maket']);
        }
            
            },"json");
            
        }
        
	}

    
    function dec_tovar(pbc,tovar)
	{
    var pbc=$(pbc);
	if (!pbc.hasClass('pb-pop-c-inactive')) {
	        if ($("#order-nodelivery").attr("checked")) delivery=1; else delivery=0;
			$.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"remove",remove:tovar,delivery:delivery},function(data){
			 
        if (!pbc.hasClass('pb-pop-c-dec-order')) //���� �� �� �������� ����������
        {            
			$('#basket_all').empty();
            var textdiv="<div class='order-coast-text'>"+data['sum']+" ���.</div><a href='http://www.arisushi.ru/order/' class='order-bottom'>��������</a><div style='clear:both'>";
			$('#basket_all').append(textdiv);
            $('#basket-popup-allcoast-value').empty();
            $('#basket-popup-allcoast-value').append(data["sum"]);
            
            newkolvo=parseInt($('#basket-popup-kolvo-value').html())-1;
            $('#basket-popup-kolvo-value').html(newkolvo);
         }   
         else
         
         {
            $('#order-allsum').html(data['sum']); 
            basket_popup_sum=$('#popup-sum'+data['product_id']);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"])  
            
         }
            
            
            b = pbc.parent().find('b');
            current = parseInt(b.html())-1;
			b.html(current);
            
            if ((current) < 99) pbc.parent().find('.pb-pop-c-inc').removeClass('pb-pop-c-inactive');
            
            if (pbc.hasClass('pb-pop-c-dec-grey'))
            {
                sum_text=pbc.parent().parent().find('.sum-of-items');
                sum=current*(parseInt(sum_text.html())/(current+1));
                sum_text.empty();
                sum_text.append(sum);
                
                c = $('#d'+data['product_id']);
			    c.html(parseInt(c.html())-1);
                
            }
            
            else
            
            {
               if (!pbc.hasClass('pb-pop-c-dec-order'))
               {
                basket_popup_num=$('#basket-popup-items').find('#popup-d'+tovar);
                basket_popup_num.empty();
                basket_popup_num.append(data["quant_cur"]);
                
                basket_popup_sum=$('#basket-popup-items').find('#popup-sum'+tovar);
                basket_popup_sum.empty()
                basket_popup_sum.append(data["price_all"]);
               }
            }
            
            if (pbc.hasClass('pb-pop-c-dec-window'))
            {
                $('#menu-items').find('#d'+data['product_id']).html(current);
            }
            
            
            //��� �������� ���������� ������
            if (pbc.hasClass('pb-pop-c-dec-order'))
            {
                
                    basket_popup_sum=$('#popup-sum'+tovar);
                    basket_popup_sum.empty();
                    basket_popup_sum.append(data["price_all"]);
                    
                    $('#order-allsum').html(data["sum"]);
                    
                    $("#order-allsum-discont").html(data["discont"]);
                    
                    spec=parseInt(pbc.data("spec"));
                    
                    if (spec>=1)  
                    
                            {
                                $('.specii').each(function(i)
                                {
                                 a=$(this);
                                 
                                 buy_spec=parseInt(a.html())-parseInt(data["specii_old"]);
                                 newcolvo=buy_spec+parseInt(data["specii"]);
                                 a.html(newcolvo);
                                 }
                                
                                );
                            }
                    
            }
            
            
             //��� ������
          if (pbc.hasClass('pb-pop-c-dec-specii'))
         
         {
               
            $('#order-allsum').html(data["sum"]);
               
            $("#order-allsum-discont").html(data["discont"]);
            
            basket_popup_sum=$('#popup-sum'+data['product_id']);
            basket_popup_sum.empty();
            basket_popup_sum.append(data["price_all"]);
            
            
            colspec=parseInt(data["quant_cur"])+parseInt(data["specii"]);
            b.html(colspec);
            
         }
            
            
            
            
            if ((current) == 0) {
                
                if (!pbc.hasClass('pb-pop-c-dec-order'))
                    {
    					pbc.addClass('pb-pop-c-inactive');
                        $('#basket-popup-items').find("#item"+tovar).remove();
                        pbc.parent().find('.pb-pop-c-dec').replaceWith( '<span class="pb-pop-c-dec"></span>');
                    }
                     
                    else
                    
                    {
                        $("#item"+tovar).remove();
                    }
                    
                   
				};
                
                if (data["quant_cur"]==0)
                {
                        $('#basket-popup-items').find("#item"+tovar).remove();
                        $("#item"+tovar).remove();
                }
                
                
                
            if ((data['sum']==0)&&(!pbc.hasClass('pb-pop-c-inc-order')))
            {
            $('#basket-popup').removeClass('active');
          	$('#basket_all').empty();
            var textdiv="<div class='empty-basket'>������� �����</div>";
			$('#basket_all').append(textdiv);
            $('#basket-popup').fadeOut(100);
            }
            
            
		},"json");
        
      
        
        
    }
 
	}
    
function empty_basket()
{
$.post("../../../../order/action2014.php.htm"/*tpa=http://www.arisushi.ru/order/action2014.php*/,{action:"empty"},"");
$('#basket_all').empty();
$('#basket_all').append("<div class='empty-basket'>������� �����</div>");
$('#basket-popup-items').empty();

$('#basket-popup-allcoast-value').empty();
$('#basket-popup-allcoast-value').append("0");

$('#basket-popup').removeClass('active');
$('#basket-popup').fadeOut(100);
$('#menu-items').find('.plus-minus-count').find('b').html('0');

}    
    
    
$(function(){    
	$('.menu-select select').change(function(){
        
	    var  porc= $(this).val(); 
        if (porc == "1/2") 
        { 
            
            $(this).parent().parent().find('.menu-item-one').css("display", "none");
            $(this).parent().parent().find('.menu-item-one-half').css("display", "block");
            $(this).parent().parent().find('.pb-pop-controls-one').css("display", "none");
            $(this).parent().parent().find('.pb-pop-controls-one-half').css("display", "block");
        }
        
        if (porc == "1") 
        { 
            
            $(this).parent().parent().find('.menu-item-one').css("display", "block");
            $(this).parent().parent().find('.menu-item-one-half').css("display", "none");
            $(this).parent().parent().find('.pb-pop-controls-one').css("display", "block");
            $(this).parent().parent().find('.pb-pop-controls-one-half').css("display", "none");            
        }
        
	
	});
    
});            



function filter()
{
      $("#menu-items .menu-item").each(function(i,elem) {
  
        codeid=$(this);
        hide=false;
        $("#change-bar-window-in .change-bar-item").each(function(i2,elem2)
            {
                if ($(this).hasClass("active")) {id=$(this).attr('id');if (!codeid.hasClass(id)) hide=true;}
                
                if ($(this).hasClass("unactive")) {id=$(this).attr('id');if (codeid.hasClass(id)) hide=true;}
                    
            });
            
            if (hide) codeid.css("display","none"); else codeid.css("display","inline-block"); 
        
        });
}


function set_filter(code,c)
{
    if (!$(c).parent().hasClass('active'))
    {
        
        $(c).parent().css("color","#5fbe85");
        $(c).css("background-position","0 17px");
        $(c).parent().find(".change-bar-item-no").css("background-position","0px 0px");
        
        $(c).parent().addClass('active');
        $(c).parent().removeClass('unactive');
        
        
        
    }
    
    else
    
     {
           $(c).parent().css("color","white");
           $(c).css("background-position","0 0px");
           $(c).parent().removeClass('active');
           $(c).parent().removeClass('unactive');
           
        
     } 
    
    filter();
    
}


function unset_filter(code,c)
{
    if (!$(c).parent().hasClass('unactive'))
    {
        $(c).parent().css("color","#eaa529");
        $(c).css("background-position","0 17px");
        $(c).parent().find(".change-bar-item-yes").css("background-position","0px 0px");
        $(c).parent().addClass('unactive');
        $(c).parent().removeClass('active');
    
    }
    
    else
    
     {
           $(c).parent().css("color","white");
           $(c).css("background-position","0 0px");
           $(c).parent().removeClass('unactive');
           $(c).parent().removeClass('active');
        
     } 
    

    filter();
    
}


function showpopupwindow()
{
      $("#popup-window").empty();
      $("#popup-window").append('<div id="close-window"  onclick="closemodal();"></div>');
      var d = document.body.scrollTop;
      document.getElementById("popup-window").style.top=(d+150)+"px";
      document.getElementById("overlay").style.display="block";
      document.getElementById("popup-window").style.display="block";
      
}

function getlaw(a)
{   
        
      
        showpopupwindow();
        
      
    
        $.post("../../../../company/legalinfo/ajax_element.php.htm"/*tpa=http://www.arisushi.ru/company/legalinfo/ajax_element.php*/,{id:a},function(data){
			
            
            $("#popup-window").append(data);
            
		});
}   


function submitreview( event )
{
    
  // Stop form from submitting normally
  //event.preventDefault();
 
  // Get some values from elements on the page:
  
  var form = $(event);
  var name = form.find("input[name='myname']").val();
  
  var text = form.find("textarea[name='text']").val();
  var url = form.attr( "action" );
    
    if (name=="") {alert("������� ���");return false}
    if (text=="") {alert("������� ����� ������");return false}
 
 $.post(url, {name: name,text:text}, function( data ) {
  if (data["result"]=="OK") alert("��������� ����������. �������!");
  if (data["result"]=="ERROR") alert("������ ����������");
  if (data["result"]=="NOTEXT") alert("������� ����� ������");
  if (data["result"]=="NONAME") alert("������� ���");
}, "json");
    
    closemodal();
}


function newreview()
{
    
    showpopupwindow();
    data='<form method="POST" action="/js/company/reviews/send.php" id="review-form" onsubmit="submitreview(this);return false;">';
    data+='<textarea class="ovziv-item-add-text" placeholder="�������� ������� ������� ��� �����, �������� ���" name="text"></textarea>';
    data+='<input placeholder="���� ���" name="myname" class="ovziv-item-add-name" value="">';
    data+='<input type="submit" class="ovziv-item-add-bottom" value="���������">';
    
    data+='</form>';
    $("#popup-window").append(data);
    
}



function popup_okno(width,height,title,ok)
{
    document.getElementById("overlay").style.display="block";
    document.getElementById("popup-okno").style.display="block";
    $("#popup-okno").width(width);
    $("#popup-okno").height(height);
    $(".popup-okno-title").hide();
    $("#popup-okno-ok").hide();
    if (title!="")
      {
         $(".popup-okno-title").html(title);
         $(".popup-okno-title").show();
        
      }
      
    if (ok==true)
        {
            $("#popup-okno-ok").show();
            
        }  
}

function action_form(a) {
      var msg   = $(a).serialize();
      
      //msg)
      if (a.elements["telefon"].value=="") {alert ("������� ������� (������ �����)");return;}
      if (ValidPhone(a.elements["telefon"].value)=="ERROR") {alert ("����� �������� �������");return;}
      
      
        $.ajax({
          type: 'POST',
          url: '../../../../order/order_from_slider.php.htm'/*tpa=http://www.arisushi.ru/order/order_from_slider.php*/,
          data: msg,
          dataType: 'json',
          success: function(data) {
            if (data["message"]=="OK") {popup_okno(600,210,a.elements["name"].value+", ������� �� �����!<br/>�� �������� �"+data["name"]+"�,<br/> ���������� "+data["price"]+" ���.<br/>� ������� 5 ����� �� �������� � ���� ��� � ��������� ������ ������ �� �����",true);}
            if (data["message"]=="telefon") alert("������� �������");
            if (data["message"]=="id") alert("����� �� ������");
          },
          error:  function(xhr, str){
                alert('�������� ������!');
            }
        });
 
    }
    

