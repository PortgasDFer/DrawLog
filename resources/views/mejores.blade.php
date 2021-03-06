@extends('layouts.template')

@section('content')
<section class="section">
	<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
	  <ul>
	    <li><a href="/">Inicio</a></li>
	    <li class="is-active"><a href="#" aria-current="page"></a> Las mejores ilustraciones</li>
	  </ul>
	</nav>
	<h2 class="is-size-4">Las mejores ilustraciones:</h2>
	 <div class="columns is-multiline is-mobile has-text-centered">
        <!-- section1 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://i.pinimg.com/originals/24/97/ee/2497ee8b9b9f4920c631d42a07ae6edf.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Sailor Moon</p>
            <p class="is-size-6">By: SailorScout96</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/ggg-5ec45eefd23fc__700.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Challenge S Moon</p>
            <p class="is-size-6">By:02_nina</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://i.ytimg.com/vi/V_TpxT5ptjA/hqdefault.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Sailor Mars</p>
            <p class="is-size-6">By: Uzumaki235</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/Artists-from-around-the-world-challenged-themselves-to-draw-the-heroine-Sailor-Moon-in-their-own-style-5ec4d698e8a6c__700.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Challenge S Moon</p>
            <p class="is-size-6">By: Kirito203</p>
        </div>
    </div>
</section>
<section class="section">
	<h3 class="is-size-4">Otros resultados</h3>
	<div class="columns is-multiline is-mobile has-text-centered">
		<div class="column is-3-tablet is-6-mobile">
            <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/Artists-from-around-the-world-challenged-themselves-to-draw-the-heroine-Sailor-Moon-in-their-own-style-5ec4d5a2cd7fb__700.jpg"/>
            <p class="is-size-4">Challege S moon</p>
            <p class="is-size-6">By: Ora_Rita12</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://i.pinimg.com/originals/96/8b/3d/968b3dcdc25c5756e511cb5436c018fd.jpg"/>
            <p class="is-size-4">Sailoor</p>
            <p class="is-size-6">By: SaintSeiya2010</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-CmhUFyeNaCjnsE8HZSNom8SfRaBrZtbvpCG6i4SIRwciJ-mUboFkG6n4doGCtXHayek&usqp=CAU"/>
            <p class="is-size-4">Another Moon</p>
            <p class="is-size-6">By: Selina1</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://i.pinimg.com/originals/f8/28/46/f82846378c945757d100363c8091bf20.jpg"/>
            <p class="is-size-4">SalirScout Moon</p>
            <p class="is-size-6">By: Tania_Sama</p>
        </div>
	</div>
</section>
@endsection