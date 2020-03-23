// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class RemoveImageSubtitlesRequest : TeaModel {
        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("BX")]
        [Validation(Required=false)]
        public float? BX { get; set; }

        [NameInMap("BY")]
        [Validation(Required=false)]
        public float? BY { get; set; }

        [NameInMap("BW")]
        [Validation(Required=false)]
        public float? BW { get; set; }

        [NameInMap("BH")]
        [Validation(Required=false)]
        public float? BH { get; set; }

    }

}
