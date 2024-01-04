<ul class="flex justify-center space-x-3">
    <?php
    $pagination  = $data["data"]["attributes"]["pagination"] ?? $data["meta"]["pagination"] ?? [];
    $currentPage = $pagination["page"];
    $pageCount   = $pagination["pageCount"];

    // Get the existing query parameters
    $query = $_GET;
    // Remove the 'page' parameter if it exists
    if (isset($query['page'])) {
        unset($query['page']);
    }

    // remove &
    $query = array_filter($query);

    // Build the base URL with the remaining query parameters
    $baseUrl = base_url() . 'galeri?' . http_build_query($query);

    // Previous Page
    $prevPage = max($currentPage - 1, 1);
    ?>
    <li class="inline-flex">
        <a id="prev" href="<?= $baseUrl ?>&page=<?= $prevPage ?>" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">
            <iconify-icon icon="heroicons:chevron-double-left-20-solid" class="text-2xl"></iconify-icon>
        </a>
    </li>

    <?php
    // Display page links
    $startPage = max($currentPage - 2, 1);
    $endPage = min($currentPage + 2, $pageCount);

    for ($i = $startPage; $i <= $endPage; $i++) :
    ?>
        <li class="inline-flex">
            <a id="each" href="<?= $baseUrl ?>&page=<?= $i ?>" class="flex w-12 h-12 flex-col items-center justify-center <?= ($i == $currentPage) ? 'bg-primary text-white' : 'bg-[#ECECEC]' ?> rounded font-semibold">
                <?= $i ?>
            </a>
        </li>
    <?php endfor; ?>

    <?php
    // Next Page
    $nextPage = min($currentPage + 1, $pageCount);
    ?>
    <li class="inline-flex">
        <a id="next" href="<?= $baseUrl ?>&page=<?= $nextPage ?>" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">
            <iconify-icon icon="heroicons:chevron-right-20-solid" class="text-2xl"></iconify-icon>
        </a>
    </li>

    <?php
    // Last Page
    $lastPage = $pageCount;
    ?>
    <li class="inline-flex">
        <a id="last" href="<?= $baseUrl ?>&page=<?= $lastPage ?>" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">
            <iconify-icon icon="heroicons:chevron-double-right-20-solid" class="text-2xl"></iconify-icon>
        </a>
    </li>
</ul>