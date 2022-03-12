const car2 = document.getElementById('carouselbox2');

var scrollPerclick2 =0 ;
var ImagePadding2 = 20;
var scrollAmont2 = 0;

InitCategory("https://kitsu.io/api/edge/anime?sort=popularityRank&filter[categories]=drama");




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
        car2.innerHTML += 

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


    scrollPerclick2 = 700;
}

function sliderScrollLeft2(){
    car2.scrollTo({
        top:0,
        left: (scrollAmont2 -= scrollPerclick2),
        behavior : "smooth",
    });

    if(scrollAmont2<0){
        scrollAmont2 = 0 
    }
}

function sliderScrollRight2() {
    if(scrollAmont2 <car2.scrollWidth - car2.clientWidth){
        car2.scrollTo({
            top: 0,
            left:(scrollAmont2 += scrollPerclick2),
            behavior: "smooth",
        })

    }else{
        car2.scrollTo({
            top: 0,
            left:-car2.scrollWidth,
            behavior: "smooth",
        })
        scrollAmont2 = 0;
    }
}