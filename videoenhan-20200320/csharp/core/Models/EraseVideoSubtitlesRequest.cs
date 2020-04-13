// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Videoenhan20200320.Models
{
    public class EraseVideoSubtitlesRequest : TeaModel {
        [NameInMap("VideoUrl")]
        [Validation(Required=true)]
        public string VideoUrl { get; set; }

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
