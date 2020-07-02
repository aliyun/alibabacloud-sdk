// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class ImitatePhotoStyleRequest : TeaModel {
        [NameInMap("StyleUrl")]
        [Validation(Required=true)]
        public string StyleUrl { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

    }

}
