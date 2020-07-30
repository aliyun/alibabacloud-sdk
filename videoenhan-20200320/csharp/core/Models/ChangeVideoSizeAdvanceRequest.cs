// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Videoenhan20200320.Models
{
    public class ChangeVideoSizeAdvanceRequest : TeaModel {
        [NameInMap("VideoUrlObject")]
        [Validation(Required=true)]
        public Stream VideoUrlObject { get; set; }

        [NameInMap("Width")]
        [Validation(Required=true)]
        public int? Width { get; set; }

        [NameInMap("Height")]
        [Validation(Required=true)]
        public int? Height { get; set; }

        [NameInMap("CropType")]
        [Validation(Required=false)]
        public string CropType { get; set; }

        [NameInMap("FillType")]
        [Validation(Required=false)]
        public string FillType { get; set; }

        [NameInMap("Tightness")]
        [Validation(Required=false)]
        public float? Tightness { get; set; }

        [NameInMap("R")]
        [Validation(Required=false)]
        public int? R { get; set; }

        [NameInMap("G")]
        [Validation(Required=false)]
        public int? G { get; set; }

        [NameInMap("B")]
        [Validation(Required=false)]
        public int? B { get; set; }

    }

}
