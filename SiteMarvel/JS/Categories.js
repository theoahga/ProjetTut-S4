const carousel = document.getElementById('carouselbox');

var scrollPerclick =0 ;
var ImagePadding = 20;
var scrollAmont = 0;

InitCategory("https://kitsu.io/api/edge/anime?sort=popularityRank&filter[categories]=adventure");




function InitCategory(url){

    fetch(url)
    .then(res => res.json())
    .then(UpdateDOMCat)
}

function UpdateDOMCat(data){
    console.log(data);
    
    carousel.innerHTML = "";
    data.data.forEach(function(anime,index){
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
        carousel.innerHTML += 

        `
        <a href="Detail.php?id=${anime.id}" class="img-${index}">
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


    scrollPerclick = 700;
}

function sliderScrollLeft(){
    carousel.scrollTo({
        top:0,
        left: (scrollAmont -= scrollPerclick),
        behavior : "smooth",
    });

    if(scrollAmont<0){
        scrollAmount = 0 
    }
}

function sliderScrollRight() {
    if(scrollAmont <carousel.scrollWidth - carousel.clientWidth){
        carousel.scrollTo({
            top: 0,
            left:(scrollAmont += scrollPerclick),
            behavior: "smooth",
        })

    }else{
        carousel.scrollTo({
            top: 0,
            left:-carousel.scrollWidth,
            behavior: "smooth",
        })
        scrollAmont = 0;
    }
}