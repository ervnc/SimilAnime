const nomePersonagem = document.querySelector("#nameCharacter");
const match_list = document.querySelector("#match_list");

const searchCharacter = async search => {
    var query = `
        query {
            Page (page: 1, perPage: 25) {
            pageInfo {
                total
                perPage
                currentPage
                hasNextPage
            }
            characters (search: "${nomePersonagem.value}") {
                id
                name {
                    userPreferred
                }
                image {
                    large
                }
            }
        }
    }`

    var options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify({
            query: query
        })
    }

    const resultado = await fetch(`https://graphql.anilist.co`, options).then((res) => res.json());

    //Get matches to current text input
    let matches = resultado.data.Page.characters.filter(result => {
        // const regex = new RegExp(`^${search}`, 'gi');
        var personagem = Object.values(result);
   
        return personagem;    
    });

    if (search.length == 0) {
        matches = [];
        match_list.innerHTML = '';
    }

    outputHtml(matches);
    console.log(matches);
    //console.log(resultado);
}

function selectItem({ target }) {
    if (target.tagName === 'SPAN') {
        var id = target.getAttribute("id");
        sessionStorage.setItem("id", id);
        console.log(id);
        nomePersonagem.value = target.getAttribute("value");
        match_list.innerHTML = ``;
    }
}

const outputHtml = matches => {
    if (matches.length > 0) {

        const html = matches.map(match => `
        <li class="nameAuto">
            <img class="ui avatar image" src="${match.image.large}" ></img>
            <span id="${match.id}" value="${match.name.userPreferred}" >${match.name.userPreferred}</span>
        </li>`).join('');

        match_list.innerHTML = html;

            
    } 
}    

nomePersonagem.addEventListener('input', () => searchCharacter(nomePersonagem.value));
match_list.addEventListener('click', selectItem);