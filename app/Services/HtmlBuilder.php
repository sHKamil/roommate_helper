<?php

class HtmlBuilder
{
    public $head;
    public $footer;

    public function buildHeader($title = "RHelper", $custom_css_url = NULL): void
    {
        $custom_css = '';
        if ($custom_css_url != NULL) {
            $custom_css = '<link rel="stylesheet" href="' . $custom_css_url . '">';
        }
        $this->head =
            '<!DOCTYPE html>
            <html lang="pl">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
                <link rel="stylesheet" href="../../app/Views/assets/css/style.css">
                ' . $custom_css . '
                <title>' . $title . '</title>
            </head>';
        return;
    }

    public function buildFooter(): void
    {
        $this->footer =
            '<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <div class="text-white mb-3 mb-md-0">
                    Copyright © 2023. All rights reserved.
                </div>
                <div>
                    <!-- Right -->
                </div>
            </div>';
        return;
    }
}
