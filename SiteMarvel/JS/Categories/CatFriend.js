const car3 = document.getElementById('carouselbox3');

var scrollPerclick3 =0 ;
var ImagePadding3 = 20;
var scrollAmont3 = 0;

InitCategory("https://kitsu.io/api/edge/anime?sort=popularityRank&filter[categories]=friendship");




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
        car3.innerHTML += 

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


    scrollPerclick3 = 700;
}

function sliderScrollLeft2(){
    car3.scrollTo({
        top:0,
        left: (scrollAmont2 -= scrollPerclick2),
        behavior : "smooth",
    });

    if(scrollAmont3<0){
        scrollAmont3 = 0 
    }
}

function sliderScrollRight2() {
    if(scrollAmont3 <car3.scrollWidth - car3.clientWidth){
        car3.scrollTo({
            top: 0,
            left:(scrollAmont3 += scrollPerclick3),
            behavior: "smooth",
        })

    }else{
        car3.scrollTo({
            top: 0,
            left:-car3.scrollWidth,
            behavior: "smooth",
        })
        scrollAmont3 = 0;
    }
}