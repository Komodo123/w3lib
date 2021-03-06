<?php

namespace w3lib\w3g\Data;

class Actions {
    public static $codes = [
        0x03000D00 => "Right Click",
        0x04000D00 => "Stop",
        0x08000D00 => "Cancel",
        0x0C000D00 => "Set Rally Point",
        0x0F000D00 => "Attack",
        0x10000D00 => "Attack Ground",
        0x12000D00 => "Move Unit",
        0x16000D00 => "Patrol",
        0x19000D00 => "Hold Position",
        0x21000D00 => "Give Away Item (from Inventory To Unit Or Ground)",
        0x22000D00 => "Swap Item Place 7",
        0x23000D00 => "Swap Item Place 8",
        0x24000D00 => "Swap Item Place 4",
        0x25000D00 => "Swap Item Place 5",
        0x26000D00 => "Swap Item Place 1",
        0x27000D00 => "Swap Item Place 2",
        0x28000D00 => "Use Item Place 7",
        0x29000D00 => "Use Item Place 8",
        0x2A000D00 => "Use Item Place 4",
        0x2B000D00 => "Use Item Place 5",
        0x2C000D00 => "Use Item Place 1",
        0x2D000D00 => "Use Item Place 2",
        0x31000D00 => "Return Resources (tested With Ghoul With Lumber)",
        0x32000D00 => "Mine (ghoul -> Lumber)",
        0x37000D00 => "Use Ability: Reveal Area (N Goblin Laboratory)",
        0x38000D00 => "Use Ability: Repair (HU Peasant, Orc Peon)",
        0x39000D00 => "Enable Autocast: Repair (HU Peasant, Orc Peon)",
        0x3A000D00 => "Disable Autocast: Repair (HU Peasant, Orc Peon)",
        0x3B000D00 => "Revive Hero (first",
        0x3C000D00 => "Revive Hero (second Of 2 Or More Dead Heros)",
        0x3D000D00 => "Revive Hero (third",
        0x3E000D00 => "Revive Hero (fourth Of 4 Or More Dead Heros)",
        0x3F000D00 => "Revive Hero (fifth",
        0x48000D00 => "Use Ability: Kaboom (Goblin Sapper)",
        0x49000D00 => "Enable Autocast: Kaboom (Goblin Sapper)",
        0x4A000D00 => "Disable Autocast: Kaboom (Goblin Sapper)",
        0x4E000D00 => "Load Unit (NE Mine/Zepellin)",
        0x4F000D00 => "Remove Single Unit (click Unit) (NE Mine/Zepellin)",
        0x50000D00 => "Unload All Units (NE Mine/Zepellin)",
        0x51000D00 => "All Wisp Exit Mine (button) (NE Gold Mine)",
        0x53000D00 => "Enable Autocast: Load Corpses (UD: Meat Wagon)",
        0x54000D00 => "Disable Autocast: Load Corpses (UD: Meat Wagon)",
        0x55000D00 => "Use Ability: Load Corpses (UD: Meat Wagon)",
        0x56000D00 => "Use Ability: Unload Corpses (UD: Meat Wagon)",
        0x57000D00 => "Use Ability: Enable Defend (HU Footman)",
        0x58000D00 => "Use Ability: Disable Defend (HU Footman)",
        0x59000D00 => "Use Ability: Area Dispell (Hu Priest)",
        0x5C000D00 => "Use Ability: Flare (Hu Mortar Team)",
        0x5F000D00 => "Use Ability: Heal (Hu Priest)",
        0x60000D00 => "Enable Autocast Heal (Hu Priest)",
        0x61000D00 => "Disable Autocast Heal (Hu Priest)",
        0x62000D00 => "Use Ability: Inner Fire (Hu Priest)",
        0x63000D00 => "Enable Autocast Inner Fire (Hu Priest)",
        0x64000D00 => "Disable Autocast Inner Fire (Hu Priest)",
        0x65000D00 => "Use Ability: Invisibility (Hu Sorcress)",
        0x68000D00 => "Use Ability: Call To Arms (Hu Peasant)",
        0x69000D00 => "Use Ability: Return To Work (Hu Militia)",
        0x6A000D00 => "Use Ability: Polymorph (Hu Sorcress)",
        0x6B000D00 => "Use Ability: Slow (Hu Sorcress)",
        0x6C000D00 => "Enable Autocast Slow (Hu Sorcress)",
        0x6D000D00 => "Disable Autocast Slow (Hu Sorcress)",
        0x72000D00 => "Call To Arms (Hu Townhall)",
        0x73000D00 => "Return To Work (Hu Townhall)",
        0x76000D00 => "Use Ability: Avatar (Hu Mountain King Ultimate)",
        0x79000D00 => "Use Ability: Blizzard (Hu Archmage)",
        0x7A000D00 => "Use Ability: Divine Shield (Hu Paladin)",
        0x7B000D00 => "Use Ability: Divine Shield - Turn Off(Hu Paladin)",
        0x7C000D00 => "Use Ability: Holy Light (Hu Paladin)",
        0x7D000D00 => "Use Ability: Mass Teleportation",
        0x7E000D00 => "Use Ability: Revive (Hu Paladin Ultimate)",
        0x7F000D00 => "Use Ability: Storm Bolt (Hu Mountain King)",
        0x80000D00 => "Use Ability: Clap (Hu Mountain King)",
        0x81000D00 => "Use Ability: Summon Water Elemental (Hu Archmage)",
        0x83000D00 => "Peons Into Combat Positions (Orc Burrow)",
        0x84000D00 => "Berserk (Orc Troll Berserker)",
        0x85000D00 => "Use Ability: Bloodlust (Orc Shaman)",
        0x86000D00 => "Enable Autocast Bloodlust (Orc Shaman)",
        0x87000D00 => "Disable Autocast Bloodlust (Orc Shaman)",
        0x88000D00 => "Use Ability: Devour (Orc Kodo Beast)",
        0x89000D00 => "Use Ability: Sentry Ward (Orc Witch Doctor)",
        0x8A000D00 => "Use Ability: Entangle (Orc Raider)",
        0x8D000D00 => "Use Ability: Healing Ward (Orc Witch Doctor)",
        0x8E000D00 => "Use Ability: Lightning Shield (Orc Shaman)",
        0x8F000D00 => "Use Ability: Purge (Orc Shaman)",
        0x91000D00 => "Return To Work (Orc Burrow)",
        0x92000D00 => "Use Ability: Stasis Trap (Orc Witch Doctor)",
        0x97000D00 => "Use Ability: Chain Lightning (Orc Farseer)",
        0x99000D00 => "Use Ability: Earthquake (Orc Farseer Ultimate)",
        0x9A000D00 => "Use Ability: Farsight (Orc Farseer)",
        0x9B000D00 => "Use Ability: Mirror Image (Orc Blademaster)",
        0x9D000D00 => "Use Ability: Shockwave (Orc Tauren Chieftain)",
        0x9E000D00 => "Use Ability: Shadow Wolves (Orc Farseer)",
        0x9F000D00 => "Use Ability: War Stomp (Orc Tauren Chieftain)",
        0xA0000D00 => "Use Ability: Blade Storm (Orc Blademaster Ultimate)",
        0xA1000D00 => "Use Ability: Wind Walk (Orc Blademaster)",
        0xA3000D00 => "Use Ability: Shadowmeld (NE Females)",
        0xA4000D00 => "Use Ability: Dispell Magic (NE Dryad)",
        0xA5000D00 => "Enable Autocast: Dispell Magic (NE Dryad)",
        0xA6000D00 => "Disable Autocast: Dispell Magic (NE Dryad)",
        0xAA000D00 => "Use Ability: Transform: DotC -> Bear (NE DotC)",
        0xAB000D00 => "Use Ability: Transform: Bear -> DotC (NE DotC)",
        0xAE000D00 => "Use Ability: Pick Up Archer (NE Hippogryph)",
        0xAF000D00 => "Use Ability: Mount Hippogryph (NE Archer)",
        0xB0000D00 => "Use Ability: Cyclone (NE DotT)",
        0xB1000D00 => "Use Ability: Detonate (NE Wisp)",
        0xB2000D00 => "Use Ability: Eat Tree (NE Ancient)",
        0xB3000D00 => "Use Ability: Entangle Goldmine (NE Tree Of Life)",
        0xB5000D00 => "Use Ability: Feary Fire (NE DotT)",
        0xB6000D00 => "Enable Autocast: Feary Fire (NE DotT)",
        0xB7000D00 => "Disable Autocast: Feary Fire (NE DotT)",
        0xBB000D00 => "Use Ability: Transform Into Crow Form (NE DotT)",
        0xBC000D00 => "Use Ability: Transform Back From Crow Form (NE DotT) [10-42-ID] (followed By [19-FF])",
        0xBD000D00 => "Use Ability: Replenish Life/mana (NE Moon Well)",
        0xBE000D00 => "Enable Autocast: Replenish Life/mana (NE Moon Well)",
        0xBF000D00 => "Disable Autocast: Replenish Life/mana (NE Moon Well) [10-42-ID]",
        0xC0000D00 => "Use Ability: Rejuvenation (NE DotC)",
        0xC1000D00 => "Use Ability: Renew (repair) (NE Wisp)",
        0xC2000D00 => "Enable Autocast: Renew (repair) (NE Wisp)",
        0xC3000D00 => "Disable Autocast: Renew (repair) (NE Wisp)",
        0xC4000D00 => "Use Ability: Roar (NE DotC)",
        0xC5000D00 => "Use Ability: Root (NE Ancient)",
        0xC6000D00 => "Use Ability: Uproot (NE Ancient)",
        0xCB000D00 => "Use Ability: Entangling Roots (NE KotG)",
        0xCD000D00 => "Use Ability: Searing Arrow (NE PotM)",
        0xCE000D00 => "Enable Autocast: Searing Arrow (NE PotM)",
        0xCF010D00 => "Disable Autocast: Searing Arrow (NE PotM)",
        0xD0000D00 => "Use Ability: Summon Treants (NE KotG)",
        0xD1000D00 => "Use Ability: Immolation ON (NE Daemon Hunter)",
        0xD2000D00 => "Use Ability: Immolation OFF (NE Daemon Hunter)",
        0xD3000D00 => "Use Ability: Manaburn (NE Daemon Hunter)",
        0xD4000D00 => "Use Ability: Metamorphosis ((NE DH Ultimate)",
        0xD5000D00 => "Use Ability: Scout Owl (NE PotM)",
        0xD6000D00 => "Use Ability: Sentinel (NE Huntress)",
        0xD7000D00 => "Use Ability: Starfall (NE PotM Ultimate)",
        0xD8000D00 => "Use Ability: Tranquility (NE KotG Ultimate)",
        0xDA000D00 => "Use Ability: Anti Magic Shell (UD Banshee)",
        0xDC000D00 => "Use Ability: Cannibalize (UD Ghoul)",
        0xDD000D00 => "Use Ability: Cripple (UD Necromancer)",
        0xDE000D00 => "Use Ability: Curse (UD Banshee)",
        0xDF000D00 => "Enable Autocast: Curse (UD Banshee)",
        0xE0000D00 => "Disable Autocast: Curse (UD Banshee)",
        0xE4000D00 => "Use Ability: Possession (UD Banshee)",
        0xE6000D00 => "Enable Autocast: Raise Skeletons (UD Necromancer)",
        0xE7000D00 => "Disable Autocast: Raise Skeletons (UD Necromancer)",
        0xE8000D00 => "Use Ability: Raise Skeletons (UD Necromancer)",
        0xE9000D00 => "Use Ability: Sacrifice (UD Acolyte Button)",
        0xEA000D00 => "Use Ability: Restore (repair) (UD Acolyte)",
        0xEB000D00 => "Enable Autocast: Restore (repair) (UD Acolyte)",
        0xEC000D00 => "Disable Autocast: Restore (repair) (UD Acolyte)",
        0xED000D00 => "Use Ability: Sacrifice (Sacrificial Pit's Button)",
        0xEE000D00 => "Transform: Gargoyle -> Stone (UD Gargoyle)",
        0xEF000D00 => "Transform: Stone -> Gargoyle (UD Gargoyle)",
        0xF1000D00 => "Use Ability: Unholy Frenzy (UD Necromancer)",
        0xF2000D00 => "Use Ability: Unsummon (UD Acolyte)",
        0xF3000D00 => "Use Ability: Web (UD Crypt Fiend)",
        0xF4000D00 => "Enable Autocast: Web (UD Crypt Fiend)",
        0xF5000D00 => "Disable Autocast: Web (UD Crypt Fiend)",
        0xF9000D00 => "Use Ability: Animate Dead (UD DeathKnight Ultimate)",
        0xFA000D00 => "Use Ability: Swarm (UD Dreadlord)",
        0xFB000D00 => "Use Ability: Dark Ritual (UD Lich)",
        0xFD000D00 => "Use Ability: Death And Decay (UD Lich Ultimate)",
        0xFE000D00 => "Use Ability: Death Coil (UD DeathKnight)",
        0xFF000D00 => "Use Ability: Death Pact (UD DeathKnight)",
        0x00010D00 => "Use Ability: Inferno (UD Dreadlord Ultimate)",
        0x01010D00 => "Use Ability: Frost Armor (UD Lich)",
        0x02010D00 => "Use Ability: Frost Nova (UD Lich)",
        0x03010D00 => "Use Ability: Sleep (UD Dreadlord)",
        0x04010D00 => "Use Ability: Dark Conversion (N Malganis)",
        0x05010D00 => "Use Ability: Dark Portal (N Archimonde)",
        0x06010D00 => "Use Ability: Finger Of Death (N Archimonde)",
        0x07010D00 => "Use Ability: Firebolt (N Warlock)",
        0x0E010D00 => "Use Ability: Rain Of Fire (Hero: Pit Lord)",
        0x12010D00 => "Use Ability: Soul Preservation (N Malganis)",
        0x13010D00 => "Use Ability: Cold Arrows (N Sylvana)",
        0x14010D00 => "Enable Autocast: Cold Arrows (N Sylvana)",
        0x15010D00 => "Disable Autocast: Cold Arrows (N Sylvana)",
        0x16010D00 => "Use Ability: Animate Dead (N Satyr Hellcaller)",
        0x17010D00 => "Use Ability: Devour (N Storm Wyrm)",
        0x18010D00 => "Use Ability: Heal (N Troll Shadowpriest)",
        0x19010D00 => "Enable Autocast: Heal (N Troll Shadowpriest)",
        0x1A010D00 => "Disable Autocast: Heal (N Troll Shadowpriest)",
        0x1C010D00 => "Use Ability: Creep Storm Bolt (N Stone Golem)",
        0x1D010D00 => "Use Ability: Creep Thunder Clap (N Granit Golem)",
        0x2E010D00 => "Use Ability: Reveal (HU Arcane Tower)",
        0xE9010D00 => "Enable Autocast Frost Armor (UD Lich)",
        0xEA010D00 => "Disable Autocast Frost Armor (UD Lich)",
        0xEA010D00 => "Enable Autocast Frost Armor (UD Lich)",
        0xEB010D00 => "Disable Autocast Frost Armor (UD Lich)",
        0xEE010D00 => "Revive First Dead Hero On Tavern",
        0xEF010D00 => "Revive Second Dead Hero On Tavern",
        0xF0010D00 => "Revive Third Dead Hero On Tavern",
        0xF1010D00 => "Revive 4th Dead Hero On Tavern",
        0xF2010D00 => "Revive 5th Dead Hero On Tavern",
        0xF9010D00 => "Cloud (HU Dragonhawk Rider)",
        0xFA010D00 => "Control Magic (HU Spell Breaker)",
        0x00020D00 => "Aerial Shackles (HU Dragonhawk Rider)",
        0x03020D00 => "Spell Steal (HU Spell Breaker)",
        0x04020D00 => "Enable Autocast: Spell Steal (HU Spell Breaker)",
        0x05020D00 => "Disable Autocast: Spell Steal (HU Spell Breaker)",
        0x06020D00 => "Banish (HU Blood Mage)",
        0x07020D00 => "Siphon Mana (HU Blood Mage / Dark Ranger)",
        0x08020D00 => "Flame Strike (HU Blood Mage)",
        0x09020D00 => "Phoenix (HU Blood Mage Ultimate)",
        0x0A020D00 => "Ancestral Spirit (Orc Spirit Walker)",
        0x0D020D00 => "Transform To Corporeal Form (Orc Spirit Walker)",
        0x0E020D00 => "Transform To Ethereal Form (Orc Spirit Walker)",
        0x13020D00 => "Spirit Link (Orc Spirit Walker)",
        0x14020D00 => "Unstable Concoction (Orc Troll Batrider)",
        0x15020D00 => "Healing Wave (Orc Shadow Hunter)",
        0x16020D00 => "Hex (Orc Shadow Hunter)",
        0x17020D00 => "Big Bad Voodoo (Orc Shadow Hunter Ultimate)",
        0x18020D00 => "Serpent Ward (Orc Shadow Hunter)",
        0x1C020D00 => "Build Hippogryph Rider (NE Archer / Hippogryph)",
        0x1D020D00 => "Separate Archer (NE Hippograph Raider)",
        0x1F020D00 => "War Club (NE Mountain Giant)",
        0x20020D00 => "Mana Flare (NE Faerie Dragon)",
        0x21020D00 => "Mana Flare (NE Faerie Dragon)",
        0x22020D00 => "Phase Shift (NE Faerie Dragon)",
        0x23020D00 => "Enable Autocast: Phase Shift (NE Faerie Dragon)",
        0x24020D00 => "Disable Autocast: Phase Shift (NE Faerie Dragon)",
        0x28020D00 => "Taunt (NE Mountain Giant)",
        0x2A020D00 => "Enable Autocast: Spirit Of Vengeance (NE Vengeance Ultimate)",
        0x2B020D00 => "Disable Autocast: Spirit Of Vengeance (NE Vengeance Ultimate) [10- ]",
        0x2C020D00 => "Spirit Of Vengeance (NE Vengeance Ultimate)",
        0x2D020D00 => "Blink (NE Warden)",
        0x2E020D00 => "Fan Of Knives (NE Warden)",
        0x2F020D00 => "Shadow Strike (NE Warden)",
        0x30020D00 => "Vengeance (NE Warden Ultimate)",
        0x31020D00 => "Absorb Mana (UD Destroyer)",
        0x33020D00 => "Morph To Destroyer (UD Obsidian Statue)",
        0x35020D00 => "Burrow (UD Crypt Fiend / Carrion Beetle)",
        0x36020D00 => "Unburrow (UD Crypt Fiend / Carrion Beetle)",
        0x38020D00 => "Devour Magic (UD Destroyer)",
        0x3B020D00 => "Orb Of Annihilation (UD Destroyer)",
        0x3C020D00 => "Enable Autocast: Orb Of Annihilation (UD Destroyer)",
        0x3D020D00 => "Disable Autocast: Orb Of Annihilation (UD Destroyer) [10- ]",
        0x41020D00 => "Essence Of Blight (UD Obsidian Statue)",
        0x42020D00 => "Enable Autocast: Essence Of Blight (UD Obsidian Statue)",
        0x43020D00 => "Disable Autocast: Essence Of Blight (UD Obsidian Statue)",
        0x44020D00 => "Spirit Touch (UD Obsidian Statue)",
        0x45020D00 => "Enable Autocast: Spirit Touch (UD Obsidian Statue)",
        0x46020D00 => "Disable Autocast: Spirit Touch (UD Obsidian Statue)",
        0x48020D00 => "Enable Autocast: Carrion Beetles (UD Crypt Lord)",
        0x49020D00 => "Disable Autocast: Carrion Beetles (UD Crypt Lord)",
        0x4A020D00 => "Carrion Beetle (UD Crypt Lord)",
        0x4B020D00 => "Impale (UD Crypt Lord)",
        0x4C020D00 => "Locust Swarm (UD Crypt Lord Ultimate)",
        0x51020D00 => "Frenzy (beastmasters Quilbeast)",
        0x52020D00 => "Enable Autocast: Frenzy (beastmasters Quilbeast)",
        0x53020D00 => "Disable Autocast: Frenzy (beastmasters Quilbeast)",
        0x56020D00 => "Change Shop Buyer",
        0x61020D00 => "Black Arrow (Hero: Dark Ranger)",
        0x62020D00 => "Enable Autocast: Black Arrow (Hero: Dark Ranger)",
        0x63020D00 => "Disable Autocast: Black Arrow (Hero: Dark Ranger)",
        0x64020D00 => "Breath Of Fire (Hero: Pandaren Brewmaster)",
        0x65020D00 => "Charm (Hero: Dark Ranger Ultimate)",
        0x67020D00 => "Doom (Hero: Pit Lord Ultimate)",
        0x69020D00 => "Drunken Haze (Hero: Pandaren Brewmaster)",
        0x6A020D00 => "Storm, Earth And Fire (Hero: Pandaren Ultimate)",
        0x6B020D00 => "Forked Lightning (Hero: Naga Sea Witch)",
        0x6C020D00 => "Howl Of Terror (Hero: Pit Lord)",
        0x6D020D00 => "Mana Shield (Hero: Naga Sea Witch)",
        0x6E020D00 => "Mana Shield (Hero: Naga Sea Witch)",
        0x70020D00 => "Silence (Hero: Dark Ranger)",
        0x71020D00 => "Stampede (Hero: Beastmaster Ultimate)",
        0x72020D00 => "Summon Bear (Hero: Beastmaster)",
        0x73020D00 => "Summon Quilbeast (Hero: Beastmaster)",
        0x74020D00 => "Summon Hawk (Hero: Beastmaster)",
        0x75020D00 => "Tornado (Hero: Naga Sea Witch Ultimate)",
        0x76020D00 => "Summon Prawn (N Makrura Snapper)",
        0xAC020D00 => "Cluster Rockets (Hero: Goblin Tinker)",
        0xB0020D00 => "Robo-Goblin (Hero: Goblin Tinker Ultimate)",
        0xB1020D00 => "Revert To Tinker (Hero: Goblin Tinker)",
        0xB2020D00 => "Pocket Factory (Hero: Goblin Tinker)",
        0xB6020D00 => "Acid Bomb (Hero: Goblin Alchemist)",
        0xB7020D00 => "Chemical Rage (Hero: Goblin Alchemist)",
        0xB8020D00 => "Healing Spray (Hero: Goblin Alchemist)",
        0xB9020D00 => "Transmute (Hero: Goblin Alchemist)",
        0xBB020D00 => "Summon Lava Spawn (Hero: Fire Lord)",
        0xBC020D00 => "Soulburn (Hero: Fire Lord)",
        0xBD020D00 => "Volcano (Hero: Fire Lord)",
        0xBE020D00 => "Incinerate (Hero: Fire Lord)",
        0xBF020D00 => "Enable Autocast: Incinerate (Hero: Fire Lord)",
        0xC0020D00 => "Disable Autocast: Incinerate (Hero: Fire Lord)",
        0xFFFFFFFF => "<No Object>"
    ];
}

?>