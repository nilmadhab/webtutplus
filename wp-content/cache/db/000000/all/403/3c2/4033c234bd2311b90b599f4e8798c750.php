�?�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:134:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.ID = 272 AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"272";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 19:31:01";s:13:"post_date_gmt";s:19:"2015-07-12 19:31:01";s:12:"post_content";s:17525:"<p><span> Hi guys, we are all familiar with paypal. In this post we will see how easily we can </span><span id="IL_AD3" class="IL_AD">integrate</span><span> PayPal payment gateway  in our website. We will use javascript to do so.</span></p>
<p>[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/payment_gateway/" target="_blank"]Demo[/button] [button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/payment_gateway.zip" target="_blank"]Download Code[/button]</p>
<p>&nbsp;</p>
<p>Step 1:- Go to <a href="https://www.paypal.com/" target="_blank">paypal site</a> . Create a account. It is free. You dont need to verify anything. You can use our email contact.webtutplus.com also for this tutorial.</p>
<p>Step 2:- Download this js file. Name it paypal.min.js</p>
<pre class="prettyprint lang-javascript">/*!
 * paypaljsbuttons
 * JavaScript integration for PayPal's payment buttons
 * @version 1.0.3 - 2014-05-20
 * 
 */
if("undefined"==typeof PAYPAL||!PAYPAL)var PAYPAL={};PAYPAL.apps=PAYPAL.apps||{},function(a){"use strict";function b(){var b,c,d,e;a.getElementById("paypal-button")||(b="",c=a.createElement("style"),d=".paypal-button",e=d+" button",b+=d+" { white-space: nowrap; }",b+=d+" .field-error {  border: 1px solid #FF0000; }",b+=d+" .hide { display: none; }",b+=d+" .error-box { background: #FFFFFF; border: 1px solid #DADADA; border-radius: 5px; padding: 8px; display: inline-block; }",b+=e+' { white-space: nowrap; overflow: hidden; border-radius: 13px; font-family: "Arial", bold, italic; font-weight: bold; font-style: italic; border: 1px solid #ffa823; color: #0E3168; background: #ffa823; position: relative; text-shadow: 0 1px 0 rgba(255,255,255,.5); cursor: pointer; z-index: 0; }',b+=e+':before { content: " "; position: absolute; width: 100%; height: 100%; border-radius: 11px; top: 0; left: 0; background: #ffa823; background: -webkit-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: -moz-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: -ms-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); z-index: -2; }',b+=e+':after { content: " "; position: absolute; width: 98%; height: 60%; border-radius: 40px 40px 38px 38px; top: 0; left: 0; background: -webkit-linear-gradient(top, #fefefe 0%, #fed994 100%); background: -moz-linear-gradient(top, #fefefe 0%, #fed994 100%); background: -ms-linear-gradient(top, #fefefe 0%, #fed994 100%); background: linear-gradient(top, #fefefe 0%, #fed994 100%); z-index: -1; -webkit-transform: translateX(1%);-moz-transform: translateX(1%); -ms-transform: translateX(1%); transform: translateX(1%); }',b+=e+".small { padding: 3px 15px; font-size: 12px; }",b+=e+".large { padding: 4px 19px; font-size: 14px; }",c.type="text/css",c.id="paypal-button",c.styleSheet?c.styleSheet.cssText=b:c.appendChild(a.createTextNode(b)),a.getElementsByTagName("head")[0].appendChild(c))}function c(b,c){var e,f,g,h,k,l,m,o,p,q,r,s,t,u,v,w=a.createElement("form"),x=a.createElement("button"),y=a.createElement("input"),z=a.createElement("p"),A=a.createElement("label"),B=a.createElement("input"),C=a.createElement("select"),D=a.createElement("option"),E=b.items,F=[],G={};w.method="post",w.action=j.replace("{env}",b.items.env.value),w.className="paypal-button",w.target="_top";var H=a.createElement("div");H.className="hide",H.id="errorBox",w.appendChild(H),B.type="text",B.className="paypal-input",z.className="paypal-group",A.className="paypal-label",C.className="paypal-select",y.type="hidden",l=E.size&&E.size.value||"large",m=E.lc&&E.lc.value||"en_US",o=n[m]||n.en_US,p=o[c],b.items.text&&(p=b.items.text.value,b.remove("text"));for(k in E)e=E[k],e.hasOptions?F.push(e):e.isEditable?(h=B.cloneNode(!0),h.name=e.key,h.value=e.value,g=A.cloneNode(!0),v=i.config.labels[e.key]||o[e.key]||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),g.appendChild(h),f=z.cloneNode(!0),f.appendChild(g),w.appendChild(f)):(h=f=y.cloneNode(!0),h.name=e.key,h.value=e.value,w.appendChild(f));F=d(F);for(k in F)if(e=F[k],F[k].hasOptions){if(G=e.value,G.options.length>1){h=y.cloneNode(!0),h.name="on"+e.displayOrder,h.value=G.label,q=C.cloneNode(!0),q.name="os"+e.displayOrder;for(s in G.options)if(t=G.options[s],"string"==typeof t)r=D.cloneNode(!0),r.value=t,r.appendChild(a.createTextNode(t)),q.appendChild(r);else for(u in t)r=D.cloneNode(!0),r.value=u,r.appendChild(a.createTextNode(t[u])),q.appendChild(r);g=A.cloneNode(!0),v=G.label||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),g.appendChild(q),g.appendChild(h)}else g=A.cloneNode(!0),v=G.label||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),h=y.cloneNode(!0),h.name="on"+e.displayOrder,h.value=G.label,g.appendChild(h),h=B.cloneNode(!0),h.name="os"+e.displayOrder,h.value=G.options[0]||"",h.setAttribute("data-label",G.label),g.appendChild(h);f=z.cloneNode(!0),f.appendChild(g),w.appendChild(f)}try{x.type="submit"}catch(I){x.setAttribute("type","submit")}return x.className="paypal-button "+l,x.appendChild(a.createTextNode(p)),w.appendChild(x),w}function d(a){return a.sort(function(a,b){return a.displayOrder-b.displayOrder}),a}function e(b,c){var d,e,f=j.replace("{env}",b.items.env.value),g=a.createElement("img"),h=f+"?",i=13,l=b.items;c=c&&c.value||250;for(e in l)d=l[e],h+=d.key+"="+encodeURIComponent(d.value)+"&";return h=encodeURIComponent(h),g.src=k.replace("{env}",b.items.env.value).replace("{url}",h).replace("{pattern}",i).replace("{size}",c),g}function f(a){var b,c,d,e,f,h={},i=[];if(b=a.attributes)for(f=0,e=b.length;e>f;f++)c=b[f],(d=c.name.match(/^data-option([0-9])([a-z]+)([0-9])?/i))?i.push({name:"option."+d[1]+"."+d[2]+(d[3]?"."+d[3]:""),value:c.value}):(d=c.name.match(/^data-([a-z0-9_]+)(-editable)?/i))&&(h[d[1]]={value:c.value,isEditable:!!d[2]});return g(i,h),h}function g(a,b){var c,d,e,f,g,h={};for(j=0;j<a.length;j++)for(c=a[j],d=c.name,e=d.split("."),f=e.shift(),g=h;f;)g[f]||(g[f]={}),e.length||(g[f]=c.value),g=g[f],f=e.shift();var i,j,k,l,m={},n={},o=[],p={},q=Object.prototype.hasOwnProperty;for(i in h)if(q.call(h,i)){l=h[i];for(j in l){b["option_"+j]={value:{options:"",label:l[j].name},hasOptions:!0,displayOrder:parseInt(j,10)},m=l[j].select,n=l[j].price,o=[];for(k in m)p={},n?(p[m[k]]=m[k]+" "+n[k],o.push(p)):o.push(m[k]);b["option_"+j].value.options=o}}}function h(){this.items={},this.add=function(a,b,c,d,e){this.items[a]={key:a,value:b,isEditable:c,hasOptions:d,displayOrder:e}},this.remove=function(a){delete this.items[a]}}var i={},j="https://{env}.paypal.com/cgi-bin/webscr",k="https://{env}.paypal.com/webapps/ppint/qrcode?data={url}&pattern={pattern}&height={size}",l="JavaScriptButton_{type}",m={name:"item_name",number:"item_number",locale:"lc",currency:"currency_code",recurrence:"p3",period:"t3",callback:"notify_url",button_id:"hosted_button_id"},n={da_DK:{buynow:"Køb nu",cart:"Læg i indkøbsvogn",donate:"Doner",subscribe:"Abonner",paynow:"Betal nu",item_name:"Vare",number:"Nummer",amount:"Pris",quantity:"Antal"},de_DE:{buynow:"Jetzt kaufen",cart:"In den Warenkorb",donate:"Spenden",subscribe:"Abonnieren",paynow:"Jetzt bezahlen",item_name:"Artikel",number:"Nummer",amount:"Betrag",quantity:"Menge"},en_AU:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},en_GB:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},en_US:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},es_ES:{buynow:"Comprar ahora",cart:"Añadir al carro",donate:"Donar",subscribe:"Suscribirse",paynow:"Pague ahora",item_name:"Artículo",number:"Número",amount:"Importe",quantity:"Cantidad"},es_XC:{buynow:"Comprar ahora",cart:"Añadir al carrito",donate:"Donar",subscribe:"Suscribirse",paynow:"Pague ahora",item_name:"Artículo",number:"Número",amount:"Importe",quantity:"Cantidad"},fr_CA:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},fr_FR:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},fr_XC:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},he_IL:{buynow:"וישכע הנק",cart:"תוינקה לסל ףסוה",donate:"םורת",subscribe:"יונמכ ףרטצה",paynow:"כשיו שלם ע",item_name:"טירפ",number:"רפסמ",amount:"םוכס",quantity:"מותכ"},id_ID:{buynow:"Beli Sekarang",cart:"Tambah ke Keranjang",donate:"Donasikan",subscribe:"Berlangganan",paynow:"Bayar Sekarang",item_name:"Barang",number:"Nomor",amount:"Harga",quantity:"Kuantitas"},it_IT:{buynow:"Paga adesso",cart:"Aggiungi al carrello",donate:"Donazione",subscribe:"Iscriviti",paynow:"Paga Ora",item_name:"Oggetto",number:"Numero",amount:"Importo",quantity:"Quantità"},ja_JP:{buynow:"今すぐ購入",cart:"カートに追加",donate:"寄付",subscribe:"購読",paynow:"今すぐ支払う",item_name:"商品",number:"番号",amount:"価格",quantity:"数量"},nl_NL:{buynow:"Nu kopen",cart:"Aan winkelwagentje toevoegen",donate:"Doneren",subscribe:"Abonneren",paynow:"Nu betalen",item_name:"Item",number:"Nummer",amount:"Bedrag",quantity:"Hoeveelheid"},no_NO:{buynow:"Kjøp nå",cart:"Legg til i kurv",donate:"Doner",subscribe:"Abonner",paynow:"Betal nå",item_name:"Vare",number:"Nummer",amount:"Beløp",quantity:"Antall"},pl_PL:{buynow:"Kup teraz",cart:"Dodaj do koszyka",donate:"Przekaż darowiznę",subscribe:"Subskrybuj",paynow:"Zapłać teraz",item_name:"Przedmiot",number:"Numer",amount:"Kwota",quantity:"Ilość"},pt_BR:{buynow:"Comprar agora",cart:"Adicionar ao carrinho",donate:"Doar",subscribe:"Assinar",paynow:"Pagar agora",item_name:"Produto",number:"Número",amount:"Valor",quantity:"Quantidade"},ru_RU:{buynow:"Купить сейчас",cart:"Добавить в корзину",donate:"Пожертвовать",subscribe:"Подписаться",paynow:"Оплатить сейчас",item_name:"Товар",number:"Номер",amount:"Сумма",quantity:"Количество"},sv_SE:{buynow:"Köp nu",cart:"Lägg till i kundvagn",donate:"Donera",subscribe:"Abonnera",paynow:"Betal nu",item_name:"Objekt",number:"Nummer",amount:"Belopp",quantity:"Antal"},th_TH:{buynow:"ซื้อทันที",cart:"เพิ่มลงตะกร้า",donate:"บริจาค",subscribe:"บอกรับสมาชิก",paynow:"จ่ายตอนนี้",item_name:"ชื่อสินค้า",number:"รหัสสินค้า",amount:"ราคา",quantity:"จำนวน"},tr_TR:{buynow:"Hemen Alın",cart:"Sepete Ekleyin",donate:"Bağış Yapın",subscribe:"Abone Olun",paynow:"Şimdi öde",item_name:"Ürün",number:"Numara",amount:"Tutar",quantity:"Miktar"},zh_CN:{buynow:"立即购买",cart:"添加到购物车",donate:"捐赠",subscribe:"租用",paynow:"现在支付",item_name:"物品",number:"编号",amount:"金额",quantity:"数量"},zh_HK:{buynow:"立即買",cart:"加入購物車",donate:"捐款",subscribe:"訂用",paynow:"现在支付",item_name:"項目",number:"號碼",amount:"金額",quantity:"數量"},zh_TW:{buynow:"立即購",cart:"加到購物車",donate:"捐款",subscribe:"訂閱",paynow:"现在支付",item_name:"商品",number:"商品編號",amount:"單價",quantity:"數量"},zh_XC:{buynow:"立即购买",cart:"添加到购物车",donate:"捐赠",subscribe:"租用",paynow:"现在支付",item_name:"物品",number:"编号",amount:"金额",quantity:"数量"}};if(PAYPAL.apps.ButtonFactory||(i.config={labels:{}},i.buttons={buynow:0,cart:0,donate:0,qr:0,subscribe:0},i.create=function(a,d,f,g){var i,j,k,n,o=new h;if(!a)return!1;for(j in d)n=d[j],o.add(m[j]||j,n.value,n.isEditable,n.hasOptions,n.displayOrder);return f=f||"buynow",k="www",o.items.env&&o.items.env.value&&(k+="."+o.items.env.value),o.items.hosted_button_id?o.add("cmd","_s-xclick"):"cart"===f?(o.add("cmd","_cart"),o.add("add",!0)):"donate"===f?o.add("cmd","_donations"):"subscribe"===f?(o.add("cmd","_xclick-subscriptions"),o.items.amount&&!o.items.a3&&o.add("a3",o.items.amount.value)):o.add("cmd","_xclick"),o.add("business",a),o.add("bn",l.replace(/\{type\}/,f)),o.add("env",k),"qr"===f?(i=e(o,o.items.size),o.remove("size")):i=c(o,f),b(),this.buttons[f]+=1,g&&g.appendChild(i),i},PAYPAL.apps.ButtonFactory=i),"undefined"!=typeof a){var o,p,q,r,s,t,u=PAYPAL.apps.ButtonFactory,v=a.getElementsByTagName("script");for(s=0,t=v.length;t>s;s++)o=v[s],o&&o.src&&(p=o&&f(o),q=p&&p.button&&p.button.value,r=o.src.split("?merchant=")[1],r&&(u.create(r,p,q,o.parentNode),o.parentNode.removeChild(o)))}}(document),"object"==typeof module&&"object"==typeof module.exports&&(module.exports=PAYPAL);</pre>
<p>Step 3:- We will a simple webpage, which will have  three dresses, with different prices. </p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="bg-info" style="text-align:center"> Paypal Payment Gateway Intergation </h1>
</div>
<div class="container" style="margin-top:50px">

        <div class="col-sm-4">
            <img src="P1.jpg" width="200"><br />
           <p> $100 </p>
         
           
        </div>

        <div class="col-sm-4">
            <img src="P2.jpg" width="200"><br />
           
            <br />
            <p> $200 </p>
           
        </div>

        <div class="col-sm-4">
            <img src="P3.jpg" width="200"><br />
            <p> $300 </p>
          
          
    </div>



</body>
</html>

</pre>
<p>&nbsp;</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal1-1024x576.png" alt="paypal1" width="1024" height="576" class="alignnone size-large wp-image-273" /></a></p>
<p>&nbsp;</p>
<p>Step 4:- Now we will add js button below each dress to purchase that dress by paypal.</p>
<pre class="prettyprint lang-javascript"><script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My product"
    data-amount="100.00"
    async
></script></pre>
<p>You can give merchant_id, if yur account is verified in first line. you can just write your email if your account is not verified. It will work for now. Give data-name and data-price. Obviously in a real website these information will have to be filled dynamically , may be from a mysql database. But this will work for now.</p>
<p>Once you add three buttons you will something like these.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal2-1024x576.png" alt="paypal2" width="1024" height="576" class="alignnone size-large wp-image-274" /></a></p>
<p>The entire code snippet will be </p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="bg-info" style="text-align:center"> Paypal Payment Gateway Intergation </h1>
</div>
<div class="container" style="margin-top:50px">

        <div class="col-sm-4">
            <img src="P1.jpg" width="200"><br />
           <p> $100 </p>
           <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com" 

    data-button="buynow"
    data-name="My first product"
    data-amount="100.00"
    async
></script>
           
        </div>

        <div class="col-sm-4">
            <img src="P2.jpg" width="200"><br />
           
            <br />
            <p> $200 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My second product"
    data-amount="200.00"
    async
></script>
        </div>

        <div class="col-sm-4">
            <img src="P3.jpg" width="200"><br />
            <p> $300 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My third product"
    data-amount="300.00"
    async
></script>
          
    </div>



</body>
</html>

</pre>
<p>&nbsp;</p>
<p>Once you click the button, you will be redirected to paypal website like this.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal3-1024x576.png" alt="paypal3" width="1024" height="576" class="alignnone size-large wp-image-275" /></a></p>
<p>&nbsp;</p>
<p>Of course there are many more things to be added. Like adding credit and debit card for transaction. Confirm by email. Showing a success message if transaction is successful or a failure message otherwise. This tutorial is meant to get you started.</p>
<p>&nbsp;</p>
";s:10:"post_title";s:51:"Paypal payment gateway integration using javascript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:51:"paypal-payment-gateway-integration-using-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-17 04:22:05";s:17:"post_modified_gmt";s:19:"2015-07-17 04:22:05";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=272";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:17525;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}