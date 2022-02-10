var id = document.getElementById('id').value;
var genre ='';

function search(url){
    fetch(`https://kitsu.io/api/edge/anime/${id}`)
    .then(res => res.json())
    .then(UpdateDOM)
}
    

async function UpdateDOM(data){
    console.log(data);
    const cover = document.getElementById('coverImage');
    const poster = document.getElementById('posterImage');
    const titre = document.getElementById('titreAnime');
    const synopsis = document.getElementById('synopsis');
    const information = document.getElementById('listeInfo');
   
    await fetch(`https://kitsu.io/api/edge/anime/${id}/genres`)
    .then(res => res.json())
    .then(function(data) {
        console.log(data);
        data.data.forEach(anime => {
            genre += anime.attributes.name + ', ';
        });
    });
    genre = genre.substring(0, genre.length - 2);

    if(data.data.attributes.episodeCount == null){
        ep = "en cours";
    }
    else{
        ep = data.data.attributes.episodeCount;
    }

    cover.innerHTML += `<img src="${data.data.attributes.coverImage.small}">`;
    poster.innerHTML += `<img src="${data.data.attributes.posterImage.small}">`;
    titre.innerHTML += `<p>${data.data.attributes.titles.en_jp}</p>`
    synopsis.innerHTML += `<p>${data.data.attributes.synopsis}</p>`
    information.innerHTML +=
    `
    <li>
        <strong>Titre</strong>
        <span>${data.data.attributes.titles.en_jp}</span>
    </li>
    <li>
        <strong>Episodes</strong>
        <span>${ep}</span>
    </li>
    <li>
        <strong>Durée</strong>
        <span>${data.data.attributes.episodeLength} minutes</span>
    </li>
    <li>
        <strong>Type</strong>
        <span>${data.data.attributes.subtype} minutes</span>
    </li>
    <li>
        <strong>Date de début</strong>
        <span>${data.data.attributes.startDate}</span>
    </li>
    <li>
        <strong>Note</strong>
        <span>${data.data.attributes.averageRating}/100</span>
    </li>
    <li>
        <strong>Genre</strong>
        <span>${genre}</span>
    </li>
    `;
}

search();