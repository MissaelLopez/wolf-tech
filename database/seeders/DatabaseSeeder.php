<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Administrador';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->rol = 'admin';
        $admin->save();

        $missael = new User();
        $missael->name = 'Missael López';
        $missael->email = 'missaelnj8@gmail.com';
        $missael->password = Hash::make('mbLL1110');
        $missael->rol = 'editor';
        $missael->save();
        
        $post1 = new Post();
        $post1->title = 'El nuevo PS Plus anuncia fecha de lanzamiento, aunque Europa será el último territorio en recibirlo';
        $post1->content = '<p>&nbsp;</p>

        <p>La comunidad est&aacute; ansiosa por conocer nuevos datos sobre el&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221107/spartacus-confirmado-ps-plus-extra-y-premium-detalles/">nuevo PS Plus</a>, que dividir&aacute; su modelo de suscripci&oacute;n en tres opciones:&nbsp;<strong>Essential, Extra y Premium</strong>. Desde entonces, diversos miembros de&nbsp;<a href="https://www.3djuegos.com/distribuidor/0f0f0f0/145/sony/">PlayStation</a>&nbsp;han estado&nbsp;<strong>elevando las expectativas</strong>&nbsp;de la comunidad con los&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221111/returnal-y-spider-man-miles-morales-entre-los-primeros/">primeros juegos confirmados</a>&nbsp;o las razones detr&aacute;s de la&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221108/el-nuevo-ps-plus-no-tendra-juegos-exclusivos-de-lanzamiento/">ausencia de exclusivos el d&iacute;a de lanzamiento</a>.</p>
        
        <p>&nbsp;</p>
        
        <p>Ahora la compa&ntilde;&iacute;a nipona regresa con un nuevo dato: la&nbsp;<strong>fecha de lanzamiento</strong>&nbsp;de su esperado servicio. Con una ventana fijada en el mes de junio, la&nbsp;<a href="https://blog.playstation.com/2022/03/29/all-new-playstation-plus-launches-in-june-with-700-games-and-more-value-than-ever/" target="_blank">p&aacute;gina web</a>&nbsp;de la compa&ntilde;&iacute;a ha sido actualizada con informaci&oacute;n relativa a su d&iacute;a de llegada, tal y como os lo detallamos a continuaci&oacute;n:</p>
        
        <p>&nbsp;</p>
        
        <ul>
            <li><strong>Mercados de Asia</strong>&nbsp;(excluyendo Jap&oacute;n): previsto para el 23 de mayo</li>
            <li><strong>Jap&oacute;n</strong>: previsto para el 1 de junio</li>
            <li><strong>Am&eacute;rica</strong>: previsto para el 13 de junio</li>
            <li><strong>Europa</strong>: previsto para el 22 de junio</li>
        </ul>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/9515/playstation_network/fotos/noticias/playstation_network-5652887.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p>Como pod&eacute;is ver, los jugadores de la regi&oacute;n europea tendremos que esperar&nbsp;<strong>unos d&iacute;as m&aacute;s</strong>&nbsp;para catar el nuevo PS Plus, pues somos los &uacute;ltimos en recibir la novedad de PlayStation. M&aacute;s all&aacute; de esto, la compa&ntilde;&iacute;a tambi&eacute;n ha anunciado que&nbsp;<strong>expandir&aacute; el acceso al juego en la nube</strong>&nbsp;a Bulgaria, Croacia, Rep&uacute;blica Checa, Grecia, Hungr&iacute;a, Malta, Polonia, Rep&uacute;blica de Chipre, Rumania, Eslovaquia y Eslovenia. Lo que, en total, permite la entrada de un total de&nbsp;<strong>30 pa&iacute;ses</strong>&nbsp;al juego v&iacute;a streaming.</p>
        
        <p>&nbsp;</p>
        
        <p>Sabiendo esto, solo queda esperar hasta el&nbsp;<strong>22 de junio</strong>&nbsp;(u otra fecha m&aacute;s temprana, si le&eacute;is esto desde otra regi&oacute;n) para conocer las bondades del nuevo PS Plus. Por el momento, ya sabemos que el nuevo servicio de PlayStation&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221121/el-nuevo-ps-plus-no-eliminara-la-ps-plus-collection-y/">no eliminar&aacute; la PS Plus Collection</a>&nbsp;y, sumado a esto, Latinoam&eacute;rica tendr&aacute;&nbsp;<strong>una suscripci&oacute;n distinta</strong>.</p>';
        $post1->section = 'noticias';
        $post1->image_url = 'https://movilforum.com/wp-content/uploads/2021/09/PS-Plus-filtracion.jpg';
        $post1->user_id = 2;
        $post1->save();

        $post2 = new Post();
        $post2->title = 'BOTW 2 SE RETRASA HASTA LA PRIMAVERA DE 2023, CONFIRMA NINTENDO';
        $post2->content = '<p>Tal y como muchos de nosotros nos lo tem&iacute;amos, la secuela de&nbsp;<a href="https://amzn.to/36GaAsh"><em><strong>The Legend of Zelda: Breath of the Wild</strong>&nbsp;</em></a>no estar&aacute; llegando a nuestras manos este a&ntilde;o. Esta noticia fue confirmada por<strong>&nbsp;Eiji Aonuma</strong>, productor de esta franquicia, mediante un nuevo video publicado en el canal oficial de&nbsp;<strong>Nintendo</strong>.</p>

        <p>&nbsp;</p>
        
        <p>As&iacute; es,&nbsp;<strong>Breath of the Wild 2</strong>&nbsp;ahora estar&aacute; debutando hasta la primavera del 2023, cuando anteriormente se estimaba que su lanzamiento se llevar&iacute;a a cabo este mismo a&ntilde;o.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://cdn.atomix.vg/wp-content/uploads/2022/03/New-Project-31-2.jpg" /></p>
        
        <p>&nbsp;</p>
        
        <p>&iquest;A qu&eacute; se debe este repentino retraso?&nbsp;<strong>Aonuma</strong>&nbsp;lo explica en el video, pero por si no pudiste verlo, ac&aacute; te transcribimos sus palabras:</p>
        
        <p>&nbsp;</p>
        
        <blockquote>
        <p>&ldquo;La aventura de esta secuela se desarrollara no solamente en el suelo como en el juego anterior, sino tambi&eacute;n en los cielos. Sin embargo, el mundo expandido va m&aacute;s all&aacute; de esto, e incluso habr&aacute; una amplia variedad de funciones que podr&aacute;n disfrutar.</p>
        
        <p>Para hacer de este juego algo verdaderamente especial, el equipo de desarrollo est&aacute; trabajando arduamente en esta experiencia, as&iacute; que por favor esperen un poco m&aacute;s.&rdquo;</p>
        </blockquote>
        
        <p>&nbsp;</p>
        
        <p>Anteriormente, esta fecha ya hab&iacute;a sido confirmada a medias durante un reporte con todos los lanzamientos de&nbsp;<strong>Nintendo</strong>, en donde se mencionaba que la secuela de&nbsp;<strong>BOTW</strong>, as&iacute; como<strong>&nbsp;Bayonetta 3</strong>,&nbsp;<a href="https://atomix.vg/botw-2-metroid-prime-4-y-bayonetta-3-podrian-salir-hasta-2023/">estar&iacute;an debutando hasta 2023.</a></p>
        
        <p>&nbsp;</p>
        
        <p><strong>Nota del editor:</strong>&nbsp;Considerando que este 2022 ya estaba repleto de lanzamientos exclusivos del Switch, era de esperarse que Nintendo fuese a retrasar una de sus cartas m&aacute;s fuertes hasta el a&ntilde;o que viene. La verdad es que no tengo problemas con que se tomen todo el tiempo que requieran.</p>
        
        <p>&nbsp;</p>
        
        <p><strong>Via:&nbsp;</strong><a href="https://twitter.com/NintendoAmerica/status/1508806409797963784?s=20&amp;t=J4TmVAwzsqaYSUip2E3fiQ">Nintendo</a></p>';
        $post2->section = 'noticias';
        $post2->image_url = 'storage/710945.jpg';
        $post2->user_id = 2;
        $post2->save();

        $post3 = new Post();
        $post3->title = 'Kirby y la tierra olvidada Análisis del exclusivo de Switch tras los pasos de Super Mario Odyssey';
        $post3->content = '<p><strong>El an&aacute;lisis de Kirby y la tierra olvidada nos descubre uno de los lanzamientos m&aacute;s &quot;redondos&quot; de Nintendo Switch en lo que va de a&ntilde;o. Un plataformas 3D cargado de sorpresas, muy accesible y terriblemente divertido.</strong></p>

        <p>&nbsp;</p>
        
        <p><strong>Masahiro Sakurai, la mente maestra detr&aacute;s de Super Smash Bros y creador de Kirby</strong>, dise&ntilde;&oacute; al personaje &nbsp;partiendo de una idea muy sencilla: &quot;un protagonista adorable al que todo el mundo quiera (...) en un juego que todos pudiesen disfrutar&quot;.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p>Aquellas palabras, que pertenecen a una entrevista por el lanzamiento de Kirby&acute;s Adventure para Game Boy hace casi 30 a&ntilde;os, siguen vigentes en Kirby y la tierra olvidada.&nbsp;<strong>El juego de Nintendo Switch</strong>&nbsp;(el tercero que protagoniza Kirby despu&eacute;s de&nbsp;<a href="https://www.hobbyconsolas.com/reviews/analisis-kirby-star-allies-exclusivo-nintendo-switch-193770">Star Allies</a>&nbsp;y&nbsp;<a href="https://www.hobbyconsolas.com/reviews/analisis-kirby-fighters-2-locas-peleas-colores-switch-724275">Kirby Fighters 2</a>) sigue fiel a este planteamiento.</p>
        
        <p>&nbsp;</p>
        
        <p>Pero los tiempos cambian, y es momento de que&nbsp;<strong>esta &quot;bola rosa&quot; d&eacute; el salto a las 3D</strong>, con un desarrollo de plataformas y acci&oacute;n que por primera vez nos permite explorar el escenario. Ya os lo adelantamos en nuestras impresiones, pero para realizar esta evoluci&oacute;n, no pod&iacute;a tener mejor maestro.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p>Lo decimos porque&nbsp;<strong>Kirby y la tierra olvidada toma &nbsp;elementos de&nbsp;</strong><a href="https://www.hobbyconsolas.com/reviews/analisis-super-mario-odyssey-nintendo-switch-170558"><strong>Super Mario Odyssey</strong></a>. Y la verdad es que usar como referencia uno de los mejores -sino el mejor- juego de plataformas de la generaci&oacute;n, es casi una garant&iacute;a de &eacute;xito.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p><strong>En nuestro an&aacute;lisis de&nbsp;</strong><a href="https://www.hobbyconsolas.com/videojuegos/kirby-tierra-olvidada"><strong>Kirby y la tierra olvidada</strong></a>&nbsp;veremos todos esos elementos que se han adaptado de Odyssey, pero que tienen una personalidad propia y nos dejan esa&nbsp;<strong>sensaci&oacute;n &uacute;nica de los juegos de Nintendo.&nbsp;</strong></p>
        
        <p>&nbsp;</p>
        
        <p>Nos referimos a experimentar la combinaci&oacute;n en perfecto equilibrio de&nbsp;<strong>gr&aacute;ficos coloridos, desarrollo accesible, un mont&oacute;n de secretos y gui&ntilde;os</strong>, unas gotas de humor y sobre todo una jugabilidad a prueba de bombas.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <h2><strong>La tierra olvidada</strong></h2>
        
        <p>&nbsp;</p>
        
        <p>El primer gran cambio con que Kirby nos sorprende es su historia y ambientaci&oacute;n.<strong>&nbsp;Kirby abandona los escenarios de fantas&iacute;a y viaja a un universo en ruinas</strong>. No se puede calificar como realista, pero s&iacute; son un pu&ntilde;ado de mundos m&aacute;s reconocible que lo acostumbrado, con edificios abandonados, centros comerciales, estaciones de metro...</p>
        
        <p>&nbsp;</p>
        
        <p>A partir de ese momento visitaremos los niveles &quot;acostumbrados&quot;; el mundo acu&aacute;tico, un parque de atracciones, la nieve o el desierto...un total de 6 mundos (y un ep&iacute;logo loqu&iacute;simo) con que poner a prueba las habilidades del personaje. En este an&aacute;lisis, por petici&oacute;n expresa de Nintendo, no vamos a revelar im&aacute;genes ni gameplay de los &uacute;ltimos.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/855/public/media/image/2022/03/kirby-tierra-olvidada-embargo-23-marzo-2639507.jpg?itok=1pyeSdFj" /></p>
        
        <p>&nbsp;</p>
        
        <p>Cada mundo se divide a su vez en fases, y en general la construcci&oacute;n de estos niveles&nbsp;<strong>limita nuestro avance en una direcci&oacute;n (no es una exploraci&oacute;n libre)</strong>, y no permite un control completo de la c&aacute;mara, pero podemos encontrar atajos y secretos en cada esquina.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p>En cada nivel tenemos que cumplir una serie de retos. El primero de ellos, claro est&aacute;, es llegar al final del recorrido (en su caso, acabar con el correspondiente jefe) y<strong>&nbsp;rescatar a todos los Waddle Dee prisioneros</strong>. Pero el resto est&aacute;n ocultos.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p>A veces consisten en activar una serie de objetos, destrozar los p&oacute;ster de &quot;se busca&quot; o encontrar una ruta alternativa. Podemos cumplirlos todos de una pasada, pero es f&aacute;cil que se nos escape alguno de los objetivos en la primera vuelta.&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/855/public/media/image/2022/03/kirby-tierra-olvidada-embargo-23-marzo-2639509.jpg?itok=bvxqa6rC" /></p>
        
        <p>&nbsp;</p>
        
        <p>La clave para cumplirlos todos est&aacute; en usar las 12 habilidades de Kirby. Su enorme apetito le permite tragarse enemigos y copiar sus poderes. Y entre ellos hay&nbsp;<strong>cl&aacute;sicos, como el Kirby helado o el Kirby-Link espadach&iacute;n</strong>, pero tambi&eacute;n hay novedades, como el taladro o el explorador.</p>
        
        <p>&nbsp;</p>
        
        <p>Y todos ellos se pueden&nbsp;<strong>mejorar en el taller de la ciudad de los Waddle Dees</strong>, una vez que hayamos recuperado los correspondientes planos. Estas mejoras no son necesarias para avanzar, pero nos hacen mucho m&aacute;s poderosos y dan acceso a fases de bonus. &nbsp;</p>';
        $post3->section = 'opiniones';
        $post3->image_url = 'storage/kirby-tierra-olvidada-2634935.webp';
        $post3->user_id = 2;
        $post3->save();

        $post4 = new Post();
        $post4->title = '9 juegos imprescindibles de GameBoy Advance que nos encantaría ver en Nintendo Switch Online';
        $post4->content = '<p>&nbsp;</p>

        <p><strong>Los rumores son cada vez m&aacute;s insistentes</strong>: la llegada de&nbsp;<a href="https://www.3djuegos.com/21543/game-boy-advance/">GameBoy Advance</a>&nbsp;a&nbsp;<a href="https://www.3djuegos.com/22864/nintendo-switch/">Nintendo Switch</a>&nbsp;parece inminente, y los fans de la legendaria consola port&aacute;til de Nintendo no podr&iacute;amos estar m&aacute;s satisfechos si la filtraci&oacute;n se acaba haciendo realidad. Lanzada en el a&ntilde;o 2001, puso en entredicho el t&oacute;pico de segundas partes nunca fueron buenas; la segunda GameBoy cont&oacute; con el apoyo de toda la industria y su tecnolog&iacute;a superior le permiti&oacute; traer de vuelta algunos cl&aacute;sicos de&nbsp;<a href="https://www.3djuegos.com/21525/super-nintendo-entertainment-system/">Super Nintendo</a>&nbsp;y crear otros nuevos cl&aacute;sicos irrepetibles&nbsp;<strong>que se convertir&iacute;an en leyenda</strong>.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/11742/gameboy_advance/fotos/noticias/gameboy_advance-5651957.webp" style="height:433px; width:770px" /></p>
        
        <p>&nbsp;</p>
        
        <p>Todav&iacute;a no hay nada claro en realidad, pero viendo la trayectoria de Nintendo en los &uacute;ltimos tiempos a&ntilde;adiendo distintas consolas a&nbsp;<a href="https://www.3djuegos.com/33446/nintendo-switch-online/">Nintendo Switch Online</a>, la decisi&oacute;n de traer de vuelta a GameBoy Advance&nbsp;<strong>no parece para nada descabellada</strong>. De hecho, y siempre que se acabe confirmando el desembarco de juegos a Switch, &iquest;d&oacute;nde quedar&iacute;a el acceso de GameBoy Advance? &iquest;En el campo de la suscripci&oacute;n convencional con los juegos de NES y Super Nintendo o en la&nbsp;<a href="https://www.3djuegos.com/noticias-ver/216955/nintendo-switch-online-tendra-juegos-de-nintendo-64-y-mega/">suscripci&oacute;n expandida</a>&nbsp;con los t&iacute;tulos de MegaDrive y&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221287/mario-golf-es-el-nuevo-clasico-de-64-para-los-suscriptores/">Nintendo 64</a>? Puede que sea momento de&nbsp;<strong>enriquecer la clase media</strong>&nbsp;de la suscripci&oacute;n tras tanto mimo a la clase alta, &iquest;no?</p>
        
        <p>&nbsp;</p>
        
        <p>A falta de una confirmaci&oacute;n oficiosa, &iquest;qu&eacute; juegos crees que no podr&iacute;an faltar en el cat&aacute;logo virtual de Switch? Hemos escogido un cat&aacute;logo de lo m&aacute;s variado, con conducci&oacute;n, Action RPG, J-RPG, exploraci&oacute;n bidimensional, lucha y m&uacute;sica,&nbsp;<strong>&iquest;nos ha faltado algo?</strong></p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651937.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p><strong>1. Golden Sun y Golden Sun: The Lost Age</strong></p>
        
        <p>Porque lo de Camelot es una verg&uuml;enza y resulta complicado hacerse con el videojuego en la actualidad de forma legal. Se ha hablado tanto del m&iacute;tico J-RPG de GameBoy Advance que no se me ocurre una mejor noticia que poder jugarlo de nuevo en el territorio de Nintendo Switch Online. &Uacute;nico en su categor&iacute;a, su redescubrimiento podr&iacute;a ayudar a la desarrolladora a huir de la dictadura del golf y los deportes random de Mario a la que Nintendo somete a Camelot desde hace un buen pu&ntilde;ado de a&ntilde;os.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651938.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <p><strong>2. Castlevania: Aria of Sorrow</strong></p>
        
        <p>El tercer y &uacute;ltimo videojuego de la saga Castlevania en GameBoy Advance es, a su vez, la secuela directa del legendario Castlevania: Symphony of the Night. Lleva la saga al futuro, nos pone en el papel de Soma Cruz, que parece ser capaz de asimilar los poderes vamp&iacute;ricos de Dr&aacute;cula y su castillo. &iquest;El resultado? Uno de los mejores videojuegos de la franquicia. Largo, desafiante y con la aparici&oacute;n de todos los elementos que hicieron grande a la marca desde que Koji Igarashi entr&oacute; en la ecuaci&oacute;n creativa.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651939.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>3. Metroid Fusion</strong></p>
        
        <p>Samus Aran tuvo a&ntilde;os dorados a principios de los 2000. Fueron los tiempos de la bonanza de la saga Metroid Prime en GameCube, pero tambi&eacute;n los a&ntilde;os del regreso a las dos dimensiones de la marca en GameBoy Advance. La pericia de Nintendo cristaliz&oacute; en Metroid Fusion y Metroid Zero Mission, dos aventuras de exploraci&oacute;n bidimensional inolvidables para la cazarrecompensas. La marca qued&oacute; sin nuevos episodios 2D hasta los tiempos de Mercury Steam. Su rescate ser&iacute;a un adelanto estupendo antes de Metroid Prime 4.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651940.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>4. Pok&eacute;mon Rub&iacute;, Zafiro y Esmeralda</strong></p>
        
        <p>Seguramente, uno de los Pok&eacute;mon m&aacute;s memorables de la marca. El t&iacute;tulo marc&oacute; muchas de las bases del futuro m&aacute;s inmediato de la saga, con batallas a dobles, concursos de estilo y una cantidad de monstruos de bolsillo enorme. Supuso el estreno de Pok&eacute;mon en el territorio de GameBoy Advance. Juegazo imprescindible que tambi&eacute;n ser&iacute;a un entrenamiento estupendo antes de la llegada de Pok&eacute;mon Escarlata y P&uacute;rpura a finales de a&ntilde;o.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651941.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>5. The Legend of Zelda: The Minish Cap</strong></p>
        
        <p>No mucha gente lo recuerda, pero la relaci&oacute;n entre Nintendo y Capcom era tan buena a finales de los 90 y principios de los 2000 que los de Kioto no dudaron en ceder a los de Osaka el desarrollo de distintos Zelda port&aacute;tiles con gran &eacute;xito. Siendo Oracle of Seasons y Oracle of Ages los primeros en comenzar la relaci&oacute;n, The Minish Cap puso la guinda. Tom&oacute; la apariencia de The Wind Waker y construy&oacute; un Action RPG estupendo.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651942.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>6. Mario Kart: Super Circuit</strong></p>
        
        <p>Es Mario Kart, no hay mucho m&aacute;s que a&ntilde;adir. Super Circuit fue el tercer videojuego de la franquicia y fue el t&iacute;tulo de velocidad que llev&oacute; a la saga al territorio port&aacute;til, zona en la que se sentir&iacute;a muy c&oacute;moda la marca en los tiempos de Nintendo DS, Nintendo 3DS y la actual versi&oacute;n de Switch. Super Circuit ofreci&oacute; algunos circuitos memorables, una jugabilidad legendaria y se convirti&oacute; en uno de los primeros grandes videojuegos de GameBoy Advance.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651943.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>7. Konami Krazy Racers</strong></p>
        
        <p>Probablemente, una de las producciones menos reconocidas del primer a&ntilde;o de la port&aacute;til que cobij&oacute; a distintos personajes de Konami en circuitos y carreras inspiradas en Castlevania, Metal Gear Solid o Mystical Ninja: Goemon. Jugablemente exquisito, musicalmente a la altura de Konami y muy ambicioso a todos los niveles. Vendr&iacute;a a ser el Parodius de coches, con personajes de la categor&iacute;a de Goemon, Dr&aacute;cula o el mism&iacute;simo Gray Fox.</p>
        
        <p>&nbsp;</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651944.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>8. Street Fighter Alpha 3</strong></p>
        
        <p>Un port de CPS-2 en GameBoy Advance inveros&iacute;mil. Tom&oacute; elementos de la revisi&oacute;n del juego en placa Naomi y sum&oacute; a la plantilla de luchadores algunos invitados de Capcom VS SNK 2. Mantuvo todas las bases jugables que hicieron legendaria a la tercera parte de la saga Zero. Crawfish Interactive no tardar&iacute;a mucho en cerrar sus puertas tras el estreno de Alpha 3 en GameBoy Advance, pero siempre se le recordar&aacute; por su incre&iacute;ble trabajo con el cl&aacute;sico de Capcom. Un completo imprescindible de lucha en la port&aacute;til de Nintendo.</p>
        
        <p><img alt="" src="https://i.3djuegos.com/juegos/18417/_galer__a_de_im__genes_2022_/fotos/set/_galer__a_de_im__genes_2022_-5651945.webp" /></p>
        
        <p>&nbsp;</p>
        
        <p><strong>9. Rythym Paradise</strong></p>
        
        <p>El Para&iacute;so del ritmo, no existe un lugar mejor. Los desarrolladores de Wario Ware llevaron el g&eacute;nero musical a un nuevo nivel en GameBoy Advance creando una de las experiencias m&aacute;s divertidas y &uacute;nicas del sistema. Microjuegos musicales y algunas de las canciones m&aacute;s enganchosas de la biblioteca de la consola. No lleg&oacute; a lanzarse la primera entrega en tierras europeas, por lo que puede ser una gran ocasi&oacute;n para reengancharse al Remix 6. Una obra maestra de Yoshio Sakamoto.</p>
        
        <p>&nbsp;</p>';
        $post4->section = 'opiniones';
        $post4->image_url = 'storage/2110-15-Nintendo-Switch-Online-Animal-Crossing.webp';
        $post4->user_id = 2;
        $post4->save();

        $post5 = new Post();
        $post5->title = 'Si vas a comprar una consola de segunda mano, estos consejos te ahorrarán sorpresas desagradables';
        $post5->content = '<p>La&nbsp;<strong>compra de consolas de segunda mano</strong>&nbsp;es una de las pr&aacute;cticas m&aacute;s comunes en la industria, todos en alg&uacute;n momento de nuestra vida hemos ido dejando atr&aacute;s sistemas a los que ya no jug&aacute;bamos y en muchas ocasiones, la venta de estos sistemas ha servido para financiar nuevas compras.&nbsp;<strong>Estas videoconsolas de segunda mano acaban en circulaci&oacute;n</strong>&nbsp;y si buscamos, podemos conseguir m&aacute;quinas que se encuentren en buen estado a muy&nbsp;<strong>buen precio</strong>.</p>

        <p>&nbsp;</p>
        
        <p>Si est&aacute;s haciendo tiempo para comprar una consola de nueva generaci&oacute;n, y ya de paso evitarte&nbsp;<a href="https://www.3djuegos.com/noticias-ver/221062/los-problemas-de-stock-en-ps5-estarian-empeorando/">la batalla campal</a>&nbsp;que supone ahora mismo conseguir una de ellas a buen precio, es posible que hayas pensado en lanzarte a comprar una consola de segunda mano, sin embargo, es importante que conozcas el&nbsp;<strong>estado de la m&aacute;quina que vas a adquirir</strong>&nbsp;para que tu pr&oacute;xima consola no te d&eacute; ning&uacute;n disgusto.</p>
        
        <p>&nbsp;</p>
        
        <h2><strong>&iquest;D&oacute;nde comprar tu consola de segunda mano?</strong></h2>
        
        <p><strong><img alt="" src="https://i.3djuegos.com/juegos/17692/_noticias2020_/fotos/noticias/_noticias2020_-5651900.webp" /></strong></p>
        
        <p>&nbsp;</p>
        
        <p>Son muchas las opciones para comprar una consola de segunda mano: las&nbsp;<strong>tiendas de compraventa de videojuegos y de productos de segunda mano</strong>&nbsp;en general te permitir&aacute;n ver la unidad que vas a comprar sin problemas y tambi&eacute;n te ofrecer&aacute;n una garant&iacute;a frente a aver&iacute;as. Si no tienes ninguna cerca, tambi&eacute;n hay tiendas que venden por internet, aunque en este caso es probable que no puedas elegir la consola ni echarle un primer vistazo.</p>
        
        <p>&nbsp;</p>
        
        <p>Si tu objetivo es buscar la mejor oferta posible, el&nbsp;<strong>trato directo con un vendedor particular</strong>&nbsp;puede ser una buena opci&oacute;n, son varias las aplicaciones de compraventa y suelen estar repletas de consolas usadas, algunas en lotes con juegos y accesorios. En caso de acudir a un vendedor particular,&nbsp;<strong>te aconsejamos que extremes las precauciones</strong>&nbsp;e intentes realizar un trato en mano para poder valorar la consola antes de comprarla.</p>
        
        <p>&nbsp;</p>
        
        <h2><strong>Estado est&eacute;tico y suciedad</strong></h2>
        
        <p><strong><img alt="" src="https://i.3djuegos.com/juegos/17692/_noticias2020_/fotos/noticias/_noticias2020_-5651881.webp" /></strong></p>
        
        <p>Si te encuentras frente a la m&aacute;quina que quieres comprar, el primer paso es echar un vistazo al&nbsp;<strong>estado est&eacute;tico</strong>&nbsp;en el que se encuentra, aunque en principio no tendr&iacute;a que afectar para nada al funcionamiento de la consola, es un buen term&oacute;metro para medir el uso y el cuidado que el anterior propietario ha tenido con ella. Una consola con&nbsp;<strong>marcas de golpes</strong>, aunque no sean importantes,&nbsp;<strong>ara&ntilde;azos importantes</strong>&nbsp;y marcas de haber sufrido mucho trasiego, nos env&iacute;a un mensaje sobre el cuidado que se ha tenido con ella. Pero como decimos, esto no es definitorio.</p>
        
        <p>&nbsp;</p>
        
        <p>En este primer vistazo tambi&eacute;n puedes aprovechar para&nbsp;<strong>comprobar el modelo de la m&aacute;quina</strong>. M&aacute;s all&aacute; de los modelos conocidos:&nbsp;<a href="https://www.3djuegos.com/13459/playstation-4/">PS4</a>,&nbsp;<a href="https://www.3djuegos.com/26626/playstation-4-slim/">PS4 Slim</a>,&nbsp;<a href="https://www.3djuegos.com/26777/ps4-pro/">PS4 PRO</a>,&nbsp;<a href="https://www.3djuegos.com/14426/xbox-one/">Xbox One</a>,&nbsp;<a href="https://www.3djuegos.com/25930/xbox-one-s/">Xbox One S</a>&nbsp;y&nbsp;<a href="https://www.3djuegos.com/25935/xbox-one-x/">Xbox One X</a>, hay revisiones menos evidentes, pero es importante que las tengas en cuenta. En el caso de PlayStation 4, el primer modelo cont&oacute; con una revisi&oacute;n importante: la diferencia la encontrar&aacute;s en el bot&oacute;n de extracci&oacute;n de discos, en lugar de ser t&aacute;ctil encontrar&aacute;s un&nbsp;<strong>bot&oacute;n mec&aacute;nico</strong>&nbsp;mucho menos problem&aacute;tico, adem&aacute;s de otras mejoras. En cuanto a PS4 Pro, la&nbsp;<strong>revisi&oacute;n CUH-7200 es la m&aacute;s interesante</strong>, siendo menos ruidosa, la identificar&aacute;s porque la toma de alimentaci&oacute;n es de tipo 8, como la de la PS4 normal y slim, en lugar de la toma gruesa, similar a la de las fuentes de alimentaci&oacute;n de PC.</p>';
        $post5->section = 'componentes';
        $post5->image_url = 'storage/Comparación-de-consolas.jpg';
        $post5->user_id = 2;
        $post5->save();
    }
}
