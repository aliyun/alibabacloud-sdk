// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class FaceBeautyRequest : TeaModel {
        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("Sharp")]
        [Validation(Required=true)]
        public float? Sharp { get; set; }

        [NameInMap("Smooth")]
        [Validation(Required=true)]
        public float? Smooth { get; set; }

        [NameInMap("White")]
        [Validation(Required=true)]
        public float? White { get; set; }

    }

}
