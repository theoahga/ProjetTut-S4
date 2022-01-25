function search(){

    const animename = document.getElementById('searchbar').value; 

    var pubkey = "25361a0c98a22df932794ff8748a05d8";
    var pvtkey = "772d95d32d0ed1fdb86c3eebb7f4af302305a9ed"; 
    var ts = new Date().getTime();


    var message = ts+pvtkey+pubkey;
    var hash = CryptoJS.MD5(message).toString();

    fetch(`https://gateway.marvel.com/v1/public/comics?titleStartsWith=${animename}&ts=${ts}&apikey=${pubkey}&hash=${hash}`)
    .then(res => res.json())
    .then(UpdateDOM)
}


function UpdateDOM(data){
    console.log(data);
    const container = document.getElementById('container');
    container.innerHTML = "";

    data.data.results.forEach(marvel => {
        src = marvel.thumbnail.path + '/portrait_fantastic.jpg';
        container.innerHTML += 
        `
        <div class="anime">
            <div class="anime_image">
                <img src=` + src + `>
            </div>
            <div class="anime_title"">
                <p>${marvel.title}</p>
            </div>
        </div>
        `
    });
}

const bar = document.getElementById('searchbar');
bar.addEventListener('change', () => {
    search(); 
});