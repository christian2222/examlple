
plugin.tx_cmsp_cmspfe {
    view {
        # cat=plugin.tx_cmsp_cmspfe/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:cmsp/Resources/Private/Templates/
        # cat=plugin.tx_cmsp_cmspfe/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:cmsp/Resources/Private/Partials/
        # cat=plugin.tx_cmsp_cmspfe/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:cmsp/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_cmsp_cmspfe//a; type=string; label=Default storage PID
        storagePid =
    }
}
