const car1 = document.getElementById('carouselbox1');

var scrollPerclick1 =0 ;
var ImagePadding1 = 20;
var scrollAmont1 = 0;

InitCategory("https://kitsu.io/api/edge/anime?sort=popularityRank&filter[categories]=super?power");




function InitCategory(url){

    fetch(url)
    .then(res => res.json())
    .then(UpdateDOMCat)
}

function UpdateDOMCat(data){
    console.log(data);
    
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
        car1.innerHTML += 

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


    scrollPerclick1 = 700;
}

function sliderScrollLeft1(){
    car1.scrollTo({
        top:0,
        left: (scrollAmont1 -= scrollPerclick1),
        behavior : "smooth",
    });

    if(scrollAmont1<0){
        scrollAmont1 = 0 
    }
}

function sliderScrollRight1() {
    if(scrollAmont1 <car1.scrollWidth - car1.clientWidth){
        car1.scrollTo({
            top: 0,
            left:(scrollAmont1 += scrollPerclick1),
            behavior: "smooth",
        })

    }else{
        car1.scrollTo({
            top: 0,
            left:-car1.scrollWidth,
            behavior: "smooth",
        })
        scrollAmont1 = 0;
    }
}