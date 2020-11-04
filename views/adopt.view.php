<?php include 'partials/header.php'; ?>
<div class="row">
    <div class="col s4">
        <p>Pronadji po kategoriji</p>
        <div class="input-field col s4">
            <select>
                <option value="0" disabled selected>odaberite</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Maca ili kuca</label>
            <br>
            <input type="submit" class="btn">
        </div>
    </div>
    <div class="col s8">
        <div class="row">
            <?php if (is_iterable($animals)) : ?>
                <?php foreach ($animals as $animal) : ?>
                    <div class="col s3 pull-s1">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo $animal->anima_img; ?>" alt="...">
                            </div>
                            <div class="card-content">
                                <h5><?php echo $animal->anima_name; ?></h5>
                                <p><?php echo $animal->anima_description; ?></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Udomi me</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>

<!-- <div class="input-field col s12">
    <select multiple>
        <option value="" disabled selected>Odaberite</option>
        <option value="1">Mace</option>
        <option value="2">Kuce</option>
    </select>
    <label>Mace/Kuce</label>
</div> -->
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