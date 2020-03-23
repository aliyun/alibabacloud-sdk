// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class EraseVideoLogoRequest : TeaModel {
        [NameInMap("VideoUrl")]
        [Validation(Required=false)]
        public string VideoUrl { get; set; }

        [NameInMap("Boxes")]
        [Validation(Required=false)]
        public List<EraseVideoLogoRequestBoxes> Boxes { get; set; }
        public class EraseVideoLogoRequestBoxes : TeaModel {
            [NameInMap("H")]
            [Validation(Required=true)]
            public float? H { get; set; }

            [NameInMap("W")]
            [Validation(Required=true)]
            public float? W { get; set; }

            [NameInMap("X")]
            [Validation(Required=true)]
            public float? X { get; set; }

            [NameInMap("Y")]
            [Validation(Required=true)]
            public float? Y { get; set; }

        }

    }

}
