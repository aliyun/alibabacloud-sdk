// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class RecolorImageRequest : TeaModel {
        [NameInMap("Url")]
        [Validation(Required=true)]
        public string Url { get; set; }

        [NameInMap("Mode")]
        [Validation(Required=false)]
        public string Mode { get; set; }

        [NameInMap("RefUrl")]
        [Validation(Required=false)]
        public string RefUrl { get; set; }

        [NameInMap("ColorCount")]
        [Validation(Required=false)]
        public int? ColorCount { get; set; }

        [NameInMap("ColorTemplate")]
        [Validation(Required=false)]
        public List<RecolorImageRequestColorTemplate> ColorTemplate { get; set; }
        public class RecolorImageRequestColorTemplate : TeaModel {
            [NameInMap("Color")]
            [Validation(Required=false)]
            public string Color { get; set; }

        }

    }

}
