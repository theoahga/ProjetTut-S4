var tabId;

function search(url){

    fetch(url)
    .then(res => res.json())
    .then(UpdateDOM)
}
    

function UpdateDOM(data){
    console.log(data);
    const container = document.getElementById('result');
    container.innerHTML = "";
    data.data.forEach(anime => {

        let ep;
        let eptxt;
        if(anime.attributes.episodeCount == null){
            ep = "en cours";
            eptxt = "";
        }
        else{
            ep = anime.attributes.episodeCount;
            eptxt = "épisodes";
        }

        container.innerHTML += 

        `
        <a href="Detail.php?id=${anime.id}">
        <div class="card">
            <div class="card-image" style="background-image: url(${anime.attributes.posterImage.small});"></div>
            <div class="card-text">
                <h2>${anime.attributes.titles.en_jp}</h2>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">${anime.attributes.averageRating}/100</div>
                    <div class="type">note</div>
                </div>
                <div class="stat border">
                    <div class="value">${ep}</div>
                    <div class="type">${eptxt}</div>
                </div>
                <div class="stat">
                    <div class="value">${anime.attributes.startDate}</div>
                    <div class="type">sortie</div>
                </div>
            </div>
        </div>
        </a>
        `

    });
}

function listPage(){
    let page = document.getElementById('switchpage');
    page.innerHTML += 
    `
    <a class="PageNumero">page</a>
    <a href="PopulaireAnime.php?num=0" class="numero">1</a>
    <a href="PopulaireAnime.php?num=20" class="numero">2</a>
    <a href="PopulaireAnime.php?num=40" class="numero">3</a>
    <a href="PopulaireAnime.php?num=60" class="numero">4</a>
    <a href="PopulaireAnime.php?num=80" class="numero">5</a>
    <a href="PopulaireAnime.php?num=100" class="numero">6</a>
    <a href="PopulaireAnime.php?num=120" class="numero">7</a>
    <a href="PopulaireAnime.php?num=140" class="numero">8</a>
    <a href="PopulaireAnime.php?num=160" class="numero">9</a>
    <a href="PopulaireAnime.php?num=180" class="numero">10</a>
    `;
}

function UpdateDOMFav(data){
    console.log(data);
    const container = document.getElementById('result');
    let ep;
    let eptxt;
    if(data.data.attributes.episodeCount == null){
        ep = "en cours";
        eptxt = "";
    }
    else{
        ep = data.data.attributes.episodeCount;
        eptxt = "épisodes";
    }

    container.innerHTML += 

    `
    <a href="Detail.php?id=${data.data.id}">
    <div class="card">
        <div class="card-image" style="background-image: url(${data.data.attributes.posterImage.small});"></div>
        <div class="card-text">
            <h2>${data.data.attributes.titles.en_jp}</h2>
        </div>
        <div class="card-stats">
            <div class="stat">
                <div class="value">${data.data.attributes.averageRating}/100</div>
                <div class="type">note</div>
            </div>
            <div class="stat border">
                <div class="value">${ep}</div>
                <div class="type">${eptxt}</div>
            </div>
            <div class="stat">
                <div class="value">${data.data.attributes.startDate}</div>
                <div class="type">sortie</div>
            </div>
        </div>
    </div>
    </a>
    `
}

if(document.title == "Recherche Anime"){
    const bar = document.getElementById('search_button');
    bar.addEventListener('click', () => {
        const animename = document.getElementById('search_input').value;
        url = `https://kitsu.io/api/edge/anime?page[limit]=20&page[offset]=0&filter[text]=${animename}`;
        search(url);
    });
}
else if(document.title == "Populaire Anime"){
    var offset = document.getElementById('offset').value;
    search(`https://kitsu.io/api/edge/anime?sort=popularityRank&page[limit]=20&page[offset]=${offset}`);
    setTimeout(function(){
        listPage();
    }, 600);
    
}
else if(document.title == "Favoris Anime"){
    var tab = document.getElementById('tab').value;
    tab = tab.substring(1);
    tab = tab.slice(0, -1);
    tabId = tab.split(",");
    const container = document.getElementById('result');
    container.innerHTML = "";
    tabId.forEach(element => 
        fetch(`https://kitsu.io/api/edge/anime/${element}`)
        .then(res => res.json())
        .then(UpdateDOMFav)
    );
    
}





