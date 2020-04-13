// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class ChangeImageSizeAdvanceRequest : TeaModel {
        [NameInMap("UrlObject")]
        [Validation(Required=true)]
        public Stream UrlObject { get; set; }

        [NameInMap("Width")]
        [Validation(Required=true)]
        public int? Width { get; set; }

        [NameInMap("Height")]
        [Validation(Required=true)]
        public int? Height { get; set; }

    }

}
