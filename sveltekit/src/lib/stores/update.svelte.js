/**
 * Flagga/signal att flödet skall uppdateras.
 * När uppdateringen är klar bör den åter sättas til false.
 * Finns andra lösningar för detta.
 * Syftet är TTnär man skrivit ett inlägg eller kommentar 
 * skall det signaleras att sidan skall uppdatera flödet.
 */

export const update = $state({value: false});