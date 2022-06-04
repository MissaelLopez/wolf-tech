// Open Sidebar
const setup = () => {
    return {
        isSidebarOpen: false,
    };
};

const sectionPosts = document.getElementById("section-posts");
const sectionBreadcrumb = document.getElementById("section-breadcrumbs");
const sectionContentPost = document.getElementById("section-content-post");
const loader = document.getElementById("status");

// Enable and Disable Dark Mode
const toggleTheme = document.getElementById("toggle-theme");
const toggleIcon = document.getElementById("toggle-icon");

if ( localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    toggleIcon.classList.remove("fa-moon");
    toggleIcon.classList.add("fa-sun");
    document.documentElement.classList.add("dark");
    localStorage.setItem("colorTheme", "dark");
} else {
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
    document.documentElement.classList.add("dark");
    localStorage.setItem("colorTheme", "dark");
}

toggleTheme.addEventListener("click", () => {
    if ( localStorage.colorTheme === "dark" ) {
        toggleIcon.classList.remove("fa-sun");
        toggleIcon.classList.add("fa-moon");
        document.documentElement.classList.add("dark");
        localStorage.setItem("colorTheme", "dark");
    } else {
        toggleIcon.classList.remove("fa-moon");
        toggleIcon.classList.add("fa-sun");
        document.documentElement.classList.add("dark");
        localStorage.setItem("colorTheme", "dark");
    }
});

const renderBreadcrumbs = ( breadcrumbs ) => {    
    let component;
    const components = [];

    breadcrumbs.map(breadcrumb => {
        if ( breadcrumb.url ) {
            component = `<button onClick="getPosts('${ breadcrumb.label }')" class="capitalize text-dark dark:text-white hover:underline"> ${ breadcrumb.label } </button>
                <span class="mx-5 text-dark dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>`;
            components.push( component );
        } else {
            component = `<p class="capitalize text-primary">${ breadcrumb.label }</p>`
            components.push( component );
        }        
    });

    return components;
}

const getPost = async ( sectionName, postId ) => {
    sectionPosts.innerHTML = "";
    sectionBreadcrumb.innerHTML = "";
    
    loader.classList.remove("hidden");

    const res = await fetch(`/api/${ sectionName }/${ postId }`);
    const post = await res.json();

    loader.classList.add("hidden");

    renderBreadcrumbs([ { label: sectionName, url: sectionName }, { label: `${ post.title }` } ]).map(elm => {
        sectionBreadcrumb.innerHTML += elm;
    });

    console.log(post);
    console.log(post.content);

    sectionContentPost.innerHTML = `<img src=${ post.image_url } class="rounded-md object-cover w-full h-64">                
        <h1 class="text-primary text-4xl font-bold mt-2 mb-2 leading-tight">
            ${ post.title }
        </h1>
        <br>
        <div id="content" class="text-dark dark:text-white font-normal"></div>`;
        document.getElementById("content").innerHTML = post.content;
};

const getPosts = async ( sectionName ) => {
    sectionPosts.innerHTML = "";
    sectionBreadcrumb.innerHTML = "";
    sectionContentPost.innerHTML = "";

    loader.classList.remove("hidden");

    const res = await fetch(`/api/${sectionName}`);
    const posts = await res.json();

    loader.classList.add("hidden");    
    
    renderBreadcrumbs([ { label: sectionName } ]).map(elm => {
        sectionBreadcrumb.innerHTML += elm;
    });

    posts.map(post => {        
        sectionPosts.innerHTML += `<div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div  class="mx-auto mb-10">
                <div class="rounded overflow-hidden mb-8 shadow-2xl border">
                    <img src=${ post.image_url } alt="image" class="w-full">
                </div>
                <div>
                    <h3 class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark dark:text-white">
                        ${ post.title }
                    </h3>
                    <div>
                        <button onClick="getPost('${ sectionName }', '${ post.id }')" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
    });
}

getPosts( "noticias" );