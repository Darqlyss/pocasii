<?= $this->extend("layout/sablona"); ?>
<?= $this->section("content"); ?>

<div class="container">
    <h1>Mazání dat</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <p><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('mazani/smazat') ?>" method="post">
        <?= csrf_field() ?>

        <label>Stanice:</label>
        <select name="station" required>
            <?php foreach ($stanice as $row): ?>
                <option value="<?= $row->S_ID ?>"><?= $row->place ?></option>
            <?php endforeach; ?>
        </select>

        <label>Rok:</label>
        <input type="number" name="year" required>

        <label>Měsíc:</label>
        <select name="month" required>
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <button type="submit">Smazat</button>
    </form>
</div>

<?= $this->endSection(); ?>
