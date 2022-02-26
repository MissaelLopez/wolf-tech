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
    document.documentElement.classList.remove("dark");
    localStorage.setItem("colorTheme", "light");
}

toggleTheme.addEventListener("click", () => {
    if ( localStorage.colorTheme === "dark" ) {
        toggleIcon.classList.remove("fa-sun");
        toggleIcon.classList.add("fa-moon");
        document.documentElement.classList.remove("dark");
        localStorage.setItem("colorTheme", "light");
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

    renderBreadcrumbs([ { label: sectionName, url: sectionName }, { label: `Publicación ${ postId }` } ]).map(elm => {
        sectionBreadcrumb.innerHTML += elm;
    });

    sectionContentPost.innerHTML = `<img src="https://picsum.photos/500/500?random=${ Math.random() * (100 - 1) + 1 }" class="rounded-md object-cover w-full h-64">                
        <h1 class="text-primary text-4xl font-bold mt-2 mb-2 leading-tight">
            ${ post.title }
        </h1>
        <br>
        <div class="text-dark dark:text-white font-normal">
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus velit ut nibh faucibus, sit amet hendrerit dolor mattis. Donec mattis euismod metus, ac gravida velit tempor vitae. Proin id convallis neque, eget malesuada nibh. Proin gravida sed quam sed euismod. Proin facilisis mi sed elit gravida mattis. Aenean neque turpis, luctus a lacus et, molestie facilisis nunc. Donec tristique arcu nec leo interdum, quis bibendum felis fermentum. Mauris at orci ut nibh tincidunt molestie.
            </p>
            <p class="mb-4">
                Quisque luctus erat sit amet risus sodales maximus. In vestibulum maximus arcu id feugiat. Maecenas porta mollis metus vel iaculis. Nulla a purus non augue sodales aliquet non quis ante. Phasellus lorem velit, imperdiet ultricies mauris at, pretium congue lectus. Nulla pulvinar fermentum neque, et porta eros iaculis at. Mauris convallis, enim sit amet consequat auctor, turpis diam rhoncus ipsum, non accumsan dui elit eget turpis. Pellentesque velit neque, tempus fringilla cursus ac, ullamcorper eget mauris. Aliquam erat volutpat. Donec at libero iaculis, aliquam risus non, mollis arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque id dapibus nulla. Phasellus odio nunc, scelerisque in dui vitae, tincidunt ultricies neque. Aliquam bibendum quam rhoncus egestas laoreet.
            </p>
            <p class="mb-4">
                Nulla ex ipsum, elementum ac tellus a, porta imperdiet odio. Nam venenatis eu turpis non hendrerit. Nullam malesuada ligula id mattis porttitor. Vestibulum porta dapibus sapien, in varius tortor eleifend sed. Fusce eget tortor quis leo commodo pulvinar. Aliquam gravida magna leo, et posuere tellus aliquam dictum. Nam vitae rutrum odio. Vivamus consequat volutpat aliquam. Nam viverra varius nisi at facilisis. Vivamus porttitor eu est at molestie. Ut laoreet nulla vitae tellus imperdiet fermentum.
            </p>
            <p class="mb-4">
                Quisque pharetra at tortor ac tristique. Pellentesque metus dolor, faucibus sit amet nibh faucibus, facilisis tempus elit. Quisque sit amet tortor vel ex lobortis sagittis. Aliquam maximus in odio nec suscipit. Sed id tempus dolor, at tempus libero. Aenean condimentum risus sit amet interdum efficitur. Nunc tincidunt, magna aliquet elementum vulputate, nulla leo eleifend dui, non eleifend mi felis in enim. Maecenas interdum tortor non tellus accumsan, placerat porta dui maximus. Nunc vel dui enim. Nullam facilisis tempor egestas. Maecenas ut lacus dolor. Morbi eget vestibulum libero, a viverra dolor.
            </p>
            <p class="mb-4">
                Mauris eu felis non augue tincidunt hendrerit. Fusce felis nulla, fringilla sed libero in, maximus vehicula neque. Integer ut viverra orci. Praesent id nisi maximus, auctor magna eu, malesuada mi. Pellentesque sollicitudin vulputate gravida. Nam viverra lectus vel lectus imperdiet, non molestie orci dapibus. In sed nisi mattis, laoreet sem at, varius orci. Maecenas ac libero a felis molestie posuere placerat a quam. Cras consectetur nisi vel massa lobortis mattis.
            </p>
        </div>`;
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
        sectionPosts.innerHTML += `<div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class="mx-auto mb-10">
                <div class="rounded overflow-hidden mb-8">
                    <img src="https://picsum.photos/500/500?random=${ Math.random() * (100 - 1) + 1 }" alt="image" class="w-full" >
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">                  
                    <h3 class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark dark:text-white">
                        ${ post.title }
                    </h3>
                    <p class="text-base mb-2">
                        ${ post.body }
                    </p>
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