<template>
  <div class="social-float">
    <!-- Menu desplegado -->
    <div v-show="isOpen" class="flex flex-col gap-3 mb-4 items-center">
      <!-- WhatsApp -->
      <a :href="whatsappUrl" target="_blank" rel="noopener noreferrer" 
         class="w-12 h-12 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform animate-fadeInUp" style="animation-delay: 0.1s">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      </a>
      <!-- Facebook -->
      <a href="https://www.facebook.com/profile.php?id=100068750961088&sk=reels_tab" target="_blank" rel="noopener noreferrer" 
         class="w-12 h-12 rounded-full bg-[#1877F2] text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform animate-fadeInUp" style="animation-delay: 0.15s">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
      </a>
      <!-- Instagram -->
      <a href="https://www.instagram.com/embutidospaladin?igsh=b2U4ZjR4ZHdndXU=" target="_blank" rel="noopener noreferrer" 
         class="w-12 h-12 rounded-full bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888] text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform animate-fadeInUp" style="animation-delay: 0.17s">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
      </a>
      <!-- Messenger -->
      <a href="https://www.facebook.com/messages/t/100068750961088/" target="_blank" rel="noopener noreferrer" 
         class="w-12 h-12 rounded-full bg-gradient-to-tr from-[#00C6FF] to-[#0072FF] text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform animate-fadeInUp" style="animation-delay: 0.19s">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.044 0 11.267c0 3.52 1.764 6.643 4.52 8.665v4.068l4.137-2.274a12.634 12.634 0 003.343.454c6.627 0 12-5.044 12-11.267C24 5.044 18.627 0 12 0zm1.18 15.02l-3.03-3.237-5.918 3.237 6.505-6.906 3.09 3.237 5.86-3.237-6.507 6.906z"/></svg>
      </a>
      <!-- TikTok -->
      <a href="https://www.tiktok.com/@embutidos_paladin?_r=1&_t=ZS-97DhstSUkA0" target="_blank" rel="noopener noreferrer" 
         class="w-12 h-12 rounded-full bg-black text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform animate-fadeInUp" style="animation-delay: 0.22s">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512"><path d="M448 209.91a210.06 210.06 0 01-122.77-39.25v178.72A162.55 162.55 0 11185 188.31v89.89a74.62 74.62 0 1052.23 71.18V0h88a121.18 121.18 0 001.86 22.17h.12A122.18 122.18 0 00448 81.08v128.83z"/></svg>
      </a>
    </div>

    <!-- Botón principal -->
    <button @click.stop.prevent="isOpen = !isOpen" class="social-float-btn bg-gradient-to-r from-[#25D366] to-[#128C7E]">
      <svg v-if="!isOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
      <svg v-else class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';

const isOpen = ref(false);

// Configuración de WhatsApp
const phoneNumber = '59172890764'; // Número actualizado
const message = 'Hola, quiero mas informacion sobre los productos';
const whatsappUrl = computed(() => `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`);

const closeOnOutsideClick = (e) => {
    if (isOpen.value && !e.target.closest('.social-float')) {
        isOpen.value = false;
    }
};

onMounted(() => document.addEventListener('click', closeOnOutsideClick));
onUnmounted(() => document.removeEventListener('click', closeOnOutsideClick));
</script>
