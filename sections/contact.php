<?php

use App\Controllers\PostsController;
use App\Models\SettingsModel;

$contactTitlePosts = PostsController::getByCategory('contact-title', 1);

?>

<section id="contact" class="flex py-20 min-h-96 flex-col lg:flex-row bg-linear-to-b from-gray-50 to-white">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
            <div id="contactForm" class="min-h-[790px] scroll-mt-27">
                <?php foreach ($contactTitlePosts as $post): ?>
                    <h2 class="text-4xl text-gray-900 mb-4">
                        <?= $post->title(); ?>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        <?= trim(strip_tags($post->content())); ?>
                    </p>
                <?php endforeach; ?>
                <?= do_shortcode('[forminator_form id="67"]'); ?>
            </div>
            <div class="lg:pl-12">
                <h3 class="text-2xl text-gray-900 mb-8">Kontaktní informace</h3>
                <div class="space-y-6 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-phone w-6 h-6 text-green-600">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">
                                Telefon</div>
                            <div class="text-gray-900">
                                <?= SettingsModel::phone(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail w-6 h-6 text-green-600">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">
                                Email</div>
                            <div class="text-gray-900">
                                <?= SettingsModel::email(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-map-pin w-6 h-6 text-green-600">
                                <path
                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                </path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">
                                Adresa</div>
                            <div class="text-gray-900">
                                <?= SettingsModel::address(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock w-6 h-6 text-green-600">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">
                                Hodiny</div>
                            <div class="text-gray-900">
                                <?= SettingsModel::hours(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-xl h-64 flex items-center justify-center">
                    <div class="text-center text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin w-12 h-12 mx-auto mb-2">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <p>Interactive
                            Map</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>