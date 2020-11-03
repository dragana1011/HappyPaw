<?php include 'partials/header.php'; ?>

<!-- <div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Mace</option>
        <option value="2">Kuce</option>
    </select>
    <label>Mace/Kuce</label>
</div> -->
<?php if (is_iterable($animals)) : ?>
    <?php foreach ($animals as $animal) : ?>
        <div class="row">
            <div class="col s12 m7">
                <div class="card small" height=100px width=100px>
                    <div class="card-image">
                        <img src="<?php echo $animal->anima_img; ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo $animal->anima_name; ?></span>
                        <p><?php echo $animal->anima_description; ?></p>

                    </div>
                    <div class="card-action">
                        <a href="#">Udomi me</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<!--
<div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Mešanac kratkodlaki</option>
        <option value="2">Mešanac dugodlaki</option>
        <option value="3">Labrador</option>
        <option value="3">Nemački ptičar</option>
        <option value="3">Sibirski haski</option>
        <option value="3">Buldog</option>
    </select>
    <label>Rasa</label>
</div>
<div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Bela</option>
        <option value="2">Crna</option>
        <option value="3">Smeđa</option>
        <option value="3">Crno-bela</option>
    </select>
    <label>Dominantna boja</label>
</div>
<div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Mala</option>
        <option value="2">Srednja</option>
        <option value="3">Velika</option>
    </select>
    <label>Veličina</label>
</div>
<div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Mala</option>
        <option value="2">Srednja</option>
        <option value="3">Velika</option>
    </select>
    <label>Starost</label>
</div> -->

<?php include 'partials/footer.php'; ?>