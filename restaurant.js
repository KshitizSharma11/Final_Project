var images = new Array(
    'https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1466120130465-9BNATBEVMW9VCWH2KMA2/Stocksy_comp_461841-color.jpg',
    'https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1466120517882-GMTUN8QUTQPXD3SSUKAE/Stocksy_comp_486556.jpg',
    'https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1466119893918-X0SATSKR7JA3GP361K3R/Stocksy_comp_821143-crop.jpg',
    'https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1466111941034-GIIKB6HB6ADZB2O0D7HW/Stocksy_comp_461838.jpg',
  );
  var slider = setInterval(function() {
    document.getElementsByTagName('body')[0].setAttribute('style', 'background-image: url("'+images[0]+'")');
    document.getElementsByTagName('h1')
    images.splice(images.length, 0, images[0]);
    images.splice(0, 1);
  }, 3000);
