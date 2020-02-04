// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ChangeImageSizeRequest : TeaModel {
        [NameInMap("Width")]
        [Validation(Required=true)]
        public int? Width { get; set; }

        [NameInMap("Height")]
        [Validation(Required=true)]
        public int? Height { get; set; }

        [NameInMap("Url")]
        [Validation(Required=true)]
        public string Url { get; set; }

    }

}
