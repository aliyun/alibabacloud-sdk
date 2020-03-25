// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class EraseVideoLogoAdvanceRequest : TeaModel {
        [NameInMap("VideoUrlObject")]
        [Validation(Required=true)]
        public Stream VideoUrlObject { get; set; }

        [NameInMap("Boxes")]
        [Validation(Required=false)]
        public List<EraseVideoLogoAdvanceRequestBoxes> Boxes { get; set; }
        public class EraseVideoLogoAdvanceRequestBoxes : TeaModel {
            [NameInMap("H")]
            [Validation(Required=false)]
            public float? H { get; set; }

            [NameInMap("W")]
            [Validation(Required=false)]
            public float? W { get; set; }

            [NameInMap("X")]
            [Validation(Required=false)]
            public float? X { get; set; }

            [NameInMap("Y")]
            [Validation(Required=false)]
            public float? Y { get; set; }

        }

    }

}
