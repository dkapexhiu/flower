@extends('_layouts.master')

@section('body')
  <header>
      <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <title>Responsive logo</title>
        <path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zM12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"></path>
      </svg>
  </header>

  <article>

    <h1>My responsive blog</h1>

    <picture id="banner">
      <source media="(min-width: 750px)" srcset="/assets/images/still_life-1600_large_2x.jpg 2x, /assets/images/still_life-800_large_1x.jpg 1x"  />
      <source media="(min-width: 500px)" srcset="/assets/images/still_life_medium.jpg" />
      <img src="/assets/images/still_life_small.jpg" alt="Vase, fruit bowl and other objects on a cupboad">
    </picture>

    <section id="post">

      <h2>My blog post</h2>

      <p class="lead">I love cheese, especially manchego swiss. ☺ Fromage queso jarlsberg cheesy feet emmental cottage cheese camembert de normandie bocconcini. Cottage cheese everyone loves cauliflower cheese rubber cheese squirty cheese halloumi cow fondue. Bocconcini cheese and biscuits everyone loves fondue red leicester st. agur blue cheese rubber cheese ricotta. Cheesy grin mozzarella.</p>

      <figure>
        <picture>
          <source media="(min-width: 750px)" srcset="/assets/images/horses-1600_large_2x.jpg 2x, /assets/images/horses-800_large_1x.jpg" />
          <source media="(min-width: 500px)" srcset="/assets/images/horses_medium.jpg" />
          <img src="/assets/images/horses_small.jpg" alt="Horses in Hawaii">
        </picture>
        <figcaption>Horses in Hawaii</figcaption>
      </figure>

      <p>Bocconcini swiss cut the cheese. Manchego boursin smelly cheese cheesy grin squirty cheese mozzarella cheddar hard cheese. Manchego roquefort camembert de normandie cheese slices mascarpone cow cheesy feet airedale. Port-salut jarlsberg gouda port-salut port-salut cheese on toast.</p>

      <figure>
        <picture>
          <source media="(min-width: 750px)" srcset="/assets/images/volt-1600_large_2x.jpg 2x, assets/images/volt-800_large_1x.jpg 1x"  />
          <source media="(min-width: 500px)" srcset="/assets/images/volt_medium.jpg" />
          <img src="/assets/images/volt_small.jpg" alt="Volt sign in old Berlin power station">
        </picture>
        <figcaption>Sign in old Berlin power station</figcaption>
      </figure>

      <p>Edam parmesan smelly cheese. Dolcelatte say cheese cheesy feet lancashire cow boursin stinking bishop brie. Stilton cheese strings say cheese pecorino cheeseburger fromage frais cauliflower cheese manchego. St. agur blue cheese ricotta stinking bishop queso camembert de normandie manchego cheese triangles fondue. Gouda.</p>

    </section>

  </article>

  <footer>

    <div id="social">
      <a href="https://twitter.com/home?status=https://twitter.com/danielkapexhiu" class="zocial-twitter">Twitter</a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/daniel.kapexhiu" class="zocial-facebook">Facebook</a>
      <a href="https://plus.google.com/share?url=https://plus.google.com/u/0/+DanielKapexhiu" class="zocial-googleplus">Google+</a>
    </div>

  </footer>
@endsection
