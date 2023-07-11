<?php

namespace Database\Seeders\Compositions\Home;

use Illuminate\Support\Facades\DB;

trait HasBackgroundsCategoryData
{
    public function insertBackgroundsItemsData()
    {
        $this->currentOrder = 1;

        DB::table('home_items')->insert([
            $this->buildItemStructure(null, 'https://imgur.com/GKQVS9q.png', 'Default Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/4YXmogn.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/qbyTAoY.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/WmMizPc.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/KzH3oMY.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/Cy0iNm6.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/2upZxv2.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/s1LaSNl.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/M9y5naT.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/2lcQLNG.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/4ttdDzg.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/WDoPNEU.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/pu7hsA7.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/SRDeAkG.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/zUFEmB8.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/fA4RzU4.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/oTQK04v.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/p3TCdHt.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/BDusXRR.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/7GQztPu.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/qlaPRp1.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/CLNktLz.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/Dpd8dbY.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/sasbTZw.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/d20NpV2.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/3nprL2K.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/rD4nz0K.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/dwJRNTj.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/6WAOJJt.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/FRAVwyT.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/xPSwZyB.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/fGhQYyF.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/Tqd16xU.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/JLabJgR.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/5cXYkVf.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/yr3YhkO.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/qAOsIa0.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/Uk9y8WX.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/o9MOw2S.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/vbYrPGC.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/0WoPTDe.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/lAq6Ned.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/pFkBf1O.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/L1g3V67.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/825ketL.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/gV1gC4M.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/3wCU3Wx.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/4Wu7iND.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/FKzxkUI.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/4SCpOfo.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/zCLwpW7.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/L1TOmig.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/iYf1XFH.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/hB24oKS.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/2JGGQIT.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/fVuef0j.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/LrCPUS1.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/SbUzEZp.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/5aumTlj.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/aNksAYc.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/LOo9i4G.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/1oRGzbx.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/c9AR3tx.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/NnSd72y.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/XD9yXeS.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/drRUaNk.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/Gv3NUv7.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/4uYg7yr.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/TMPhfzW.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/2NUdWgI.png', 'Home Background', 15, 'b'),
            $this->buildItemStructure(null, 'https://imgur.com/CoeD0M0.png', 'Home Background', 15, 'b'),
        ]);
    }
}
