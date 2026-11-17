<div class="liste-produits">
<?php foreach ($produit as $pro):?>
<div class="carte-produit">
    <!-- الشرط الأول: تبديل كلاس اللون حسب نوع الحيوان -->
<span class="tag <?php if($pro['animal'] =='chat'): ?>tag-rose<?php else: ?> tag-bleu<?php endif; ?>">
   <?= htmlspecialchars($pro['animal'])?>
</span>


<?php if ($pro['promo']==true): ?>
    <span class="badge-promo">
        🔥 عرض خاص (-20%)
    </span>
<?php endif; ?>

<h3><?=htmlspecialchars($pro['nom'])?></h3>
<p>الثمن:<?=htmlspecialchars($pro['prix'])?></p>
</div>

<?php endforeach; ?>
</div>