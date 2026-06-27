#!/bin/bash

SOURCE_DIR="node_modules/bootstrap-italia/dist"
TARGET_DIR="public/bootstrap-italia/dist"

echo "Ottimizzazione asset Bootstrap Italia per il progetto..."

# Verifica se node_modules di bootstrap-italia esiste
if [ ! -d "$SOURCE_DIR" ]; then
    echo "❌ Errore: node_modules/bootstrap-italia/dist non trovato."
    echo "Assicurati di aver lanciato 'npm install'."
    exit 1
fi

# Crea la struttura delle cartelle in public se non esiste
mkdir -p "$TARGET_DIR/svg"
mkdir -p "$TARGET_DIR/fonts"

# Copia i font
echo "📦 Copia dei font in corso..."
cp -R $SOURCE_DIR/fonts/* "$TARGET_DIR/fonts/"

# Copia e rinomina lo sprite SVG (gestisce sia se si chiama svg-sprite che sprites)
echo "🎨 Copia e allineamento dello sprite SVG..."
if [ -f "$SOURCE_DIR/svg/svg-sprite.svg" ]; then
    cp "$SOURCE_DIR/svg/svg-sprite.svg" "$TARGET_DIR/svg/sprites.svg"
elif [ -f "$SOURCE_DIR/svg/sprites.svg" ]; then
    cp "$SOURCE_DIR/svg/sprites.svg" "$TARGET_DIR/svg/sprites.svg"
else
    echo "⚠️ Avviso: Sprite SVG non trovato in node_modules."
fi

echo "✅ Asset copiati con successo in $TARGET_DIR!"
