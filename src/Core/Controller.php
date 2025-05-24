<?php
namespace Core;

abstract class Controller {
    /**
     * يعرض View من مجلد src/Views
     * @param string $view مثال: 'clinic/index' أو 'dashboard/orders'
     * @param array  $data تمرير متغيرات للـ view
     */
    protected function render(string $view, array $data = []): void {
        extract($data, EXTR_SKIP);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}
