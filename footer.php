<?php
/**
 * Footer
 *
 * @package DotaceApp
 */

use App\Models\SettingsModel;

?>

<footer class="flex w-full min-h-95 bg-[#101828]">
    <div class="container mx-auto py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl">⚡</span>
                    </div>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white text-xl font-semibold">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                <p class="text-gray-400 mb-4">
                    <?php bloginfo('description'); ?>
                </p>
                <div class="flex gap-3">
                    <a href="<?= esc_url(SettingsModel::facebook()); ?>"
                        class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-facebook w-5 h-5">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="<?= esc_url(SettingsModel::xcom()); ?>"
                        class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-twitter w-5 h-5">
                            <path
                                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                            </path>
                        </svg>
                    </a>
                    <a href="<?= esc_url(SettingsModel::instagram()); ?>"
                        class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-instagram w-5 h-5">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="<?= esc_url(SettingsModel::linkedin()); ?>"
                        class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors"
                        data-fg-bb4420="1.17:1.5409:/src/app/components/Footer.tsx:29:15:1553:195:e:a:e"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-linkedin w-5 h-5">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-white text-lg mb-4">Rychlé odkazy</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'footer_quick_links',
                    'container' => false,
                    'menu_class' => 'space-y-2 text-gray-400',
                ]); ?>
            </div>
            <div>
                <h3 class="text-white text-lg mb-4">Služby</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'services',
                    'container' => false,
                    'menu_class' => 'space-y-2 text-gray-400',
                ]); ?>
            </div>
            <div>
                <h3 class="text-white text-lg mb-4">Newsletter</h3>
                <p class="text-gray-400 mb-4">Přihlaste se k odběru a získejte nejnovější novinky a speciální nabídky.
                </p>
                <form class="space-y-2">
                    <input type="email" placeholder="Váš e-mail"
                        class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:border-green-600 focus:ring-2 focus:ring-green-600/20 outline-none transition-all">
                    <button type="submit"
                        class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center gap-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>Odebírat</button>
                </form>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-400 text-sm">&copy;
                <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>. Všechna práva vyhrazena.
            </p>
            <div class="flex gap-6 text-sm">
                <a href="#" class="text-gray-400 hover:text-green-500 transition-colors">Zásady ochrany osobních
                    údajů</a>
                <a href="#" class="text-gray-400 hover:text-green-500 transition-colors">Podmínky služby</a>
                <a href="#" class="text-gray-400 hover:text-green-500 transition-colors">Zásady používání cookies</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>